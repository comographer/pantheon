/*
 * Tyr - Allows online game recording in japanese (riichi) mahjong sessions
 * Copyright (C) 2016 Oleg Klimenko aka ctizen <me@ctizen.net>
 *
 * This file is part of Tyr.
 *
 * Tyr is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Tyr is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tyr.  If not, see <http://www.gnu.org/licenses/>.
 */

import {EnvConfig} from "#/envConfig/interface";

function replicaAppend(url: string) {
  if (window.location.host.startsWith('ru.')) {
    return url.replace('https://', 'https://ru.');
  }
  return url;
}

export const environment: EnvConfig = {
  production: true,
  apiUrl: replicaAppend('https://g.riichi.top/'),
  uaUrl: replicaAppend('https://u.riichi.top/'),
  guiUrl: replicaAppend('https://r.riichi.top/'),
  idbTokenKey: 'pantheon_authToken',
  idbIdKey: 'pantheon_currentPersonId',
  idbEventKey: 'pantheon_currentEventId',
  idbLangKey: 'pantheon_currentLanguage',
  idbThemeKey: 'pantheon_currentTheme',
  cookieDomain: '.riichi.top',
  guiFix: (src: string) => src,
  metrikaId: 64318630,

  // Do not change this unless you really know what are you doing
  apiVersion: [1, 0]
};