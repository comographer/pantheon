import {
  AddOnlineReplay,
  GetAchievements,
  GetAllRegisteredPlayers,
  GetCurrentSeating,
  GetEvents,
  GetEventsById,
  GetGame,
  GetGamesSeries,
  GetLastGames,
  GetPlayer,
  GetPlayerStats,
  GetRatingTable,
  GetTimerState,
} from '../clients/proto/mimir.pb';
import { GetEventAdmins } from '../clients/proto/frey.pb';
import { ClientConfiguration } from 'twirpscript';
import { handleReleaseTag } from './releaseTags';
import { Analytics } from './analytics';

export class ApiService {
  private _authToken: string | null = null;
  private _personId: string | null = null;
  private _eventId: string | null = null;
  private _analytics: Analytics | null = null;
  private readonly _clientConfMimir: ClientConfiguration = {
    prefix: '/v2',
  };
  private readonly _clientConfFrey: ClientConfiguration = {
    prefix: '/v2',
  };

  constructor(freyUrl: string, mimirUrl: string) {
    this._clientConfFrey.baseURL = freyUrl;
    this._clientConfMimir.baseURL = mimirUrl;
  }

  setAnalytics(analytics: Analytics) {
    this._analytics = analytics;
    return this;
  }

  setEventId(eventId: number) {
    this._eventId = eventId ? eventId.toString() : '';
    return this;
  }

  setCredentials(personId: number, token: string) {
    this._authToken = token;
    this._personId = (personId || 0).toString();

    const headers = new Headers();
    headers.append('X-Auth-Token', this._authToken ?? '');
    headers.append('X-Current-Person-Id', this._personId ?? '');

    // eslint-disable-next-line no-multi-assign
    this._clientConfFrey.rpcTransport = this._clientConfMimir.rpcTransport = (url, opts) => {
      Object.keys(opts.headers ?? {}).forEach((key) => headers.set(key, opts.headers[key]));
      headers.set('X-Current-Event-Id', this._eventId ?? '');
      return fetch(url + (process.env.NODE_ENV === 'production' ? '' : '?XDEBUG_SESSION=start'), {
        ...opts,
        headers,
      })
        .then(handleReleaseTag)
        .then((resp) => {
          if (!resp.ok) {
            return resp.json().then((err) => {
              // Twirp server error handling
              if (err.code && err.code === 'internal' && err.meta && err.meta.cause) {
                this._analytics?.track(Analytics.REMOTE_ERROR, {
                  url,
                  message: err.meta.cause,
                });
                throw new Error(err.meta.cause);
              }
              return resp;
            });
          }
          return resp;
        });
    };
  }

  getAllPlayers(eventId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, {
      method: 'GetAllRegisteredPlayers',
    });
    return GetAllRegisteredPlayers({ eventIds: [eventId] }, this._clientConfMimir).then(
      (val) => val.players
    );
  }

  getRatingTable(
    eventId: number,
    order: 'asc' | 'desc',
    orderBy: 'name' | 'rating' | 'avg_place' | 'avg_score'
  ) {
    this._analytics?.track(Analytics.LOAD_STARTED, {
      method: 'GetRatingTable',
    });
    return GetRatingTable({ eventIdList: [eventId], order, orderBy }, this._clientConfMimir).then(
      (r) => r.list
    );
  }

  addOnlineGame(eventId: number, link: string) {
    this._analytics?.track(Analytics.LOAD_STARTED, {
      method: 'AddOnlineReplay',
    });
    return AddOnlineReplay({ eventId, link }, this._clientConfMimir);
  }

  getEvents(limit: number, offset: number, filterUnlisted: boolean) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetEvents' });
    return GetEvents({ limit, offset, filterUnlisted }, this._clientConfMimir);
  }

  getEventsById(ids: number[]) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetEventsById' });
    return GetEventsById({ ids }, this._clientConfMimir).then((r) => r.events);
  }

  getRecentGames(eventId: number, limit: number, offset: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetRecentGames' });
    return GetLastGames(
      { eventIdList: [eventId], limit, offset, order: 'desc', orderBy: 'id' },
      this._clientConfMimir
    );
  }

  getGame(sessionHash: string) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetGame' });
    return GetGame({ sessionHash: sessionHash }, this._clientConfMimir);
  }

  getGameSeries(eventId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetGameSeries' });
    return GetGamesSeries({ eventId }, this._clientConfMimir).then((r) => r.results);
  }

  getPlayerStat(eventIdList: number[], playerId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'getPlayerStat' });
    return GetPlayerStats({ playerId, eventIdList }, this._clientConfMimir);
  }

  getTimerState(eventId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetTimerState' });
    return GetTimerState({ eventId }, this._clientConfMimir);
  }

  getSeating(eventId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'GetCurrentSeating' });
    return GetCurrentSeating({ eventId }, this._clientConfMimir).then((r) => r.seating);
  }

  getPlayer(playerId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, { method: 'getPlayer' });
    return GetPlayer({ id: playerId }, this._clientConfMimir).then((r) => r.players);
  }

  // TODO: list on main page
  getEventAdmins(eventId: number) {
    this._analytics?.track(Analytics.LOAD_STARTED, {
      method: 'GetEventAdmins',
    });
    return GetEventAdmins({ eventId }, this._clientConfFrey).then((r) => r.admins);
  }

  getAchievements(eventId: number, achievementsList: string[]) {
    this._analytics?.track(Analytics.LOAD_STARTED, {
      method: 'GetEventAdmins',
    });
    return GetAchievements({ eventId, achievementsList }, this._clientConfMimir).then(
      (r) => r.achievements
    );
  }
}
