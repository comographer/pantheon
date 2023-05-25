import * as React from 'react';
import { useIsomorphicState } from '../hooks/useIsomorphicState';
import { useApi } from '../hooks/api';
import { useLocation } from 'wouter';
import {
  Anchor,
  Container,
  Divider,
  Group,
  Text,
  Space,
  Stack,
  useMantineColorScheme,
  useMantineTheme,
  Badge,
  Button,
  Alert,
  Loader,
  Center,
  LoadingOverlay,
  Box,
} from '@mantine/core';
import { EventTypeIcon } from '../components/EventTypeIcon';
import { PlayerIcon } from '../components/PlayerIcon';
import { EventType, PlayerInRating } from '../clients/proto/atoms.pb';
import { useMediaQuery } from '@mantine/hooks';
import { useI18n } from '../hooks/i18n';
import { useEvent } from '../hooks/useEvent';
import {
  IconCoins,
  IconDownload,
  IconExclamationCircle,
  IconSortAscending2,
  IconSortDescending2,
} from '@tabler/icons-react';
import { I18nService } from '../services/i18n';
import { useContext } from 'react';
import { globalsCtx } from '../hooks/globals';
import { TeamTable } from '../components/TeamTable';

// TODO: aggregated events

export const RatingTable: React.FC<{
  params: {
    eventId: string;
    orderBy?: 'name' | 'rating' | 'avg_place' | 'avg_score' | 'team';
  };
}> = ({ params: { eventId, orderBy } }) => {
  orderBy = orderBy ?? 'rating';
  const order = {
    name: 'asc',
    rating: 'desc',
    avg_place: 'asc',
    avg_score: 'desc',
    team: 'desc',
  }[orderBy] as 'asc' | 'desc';
  const api = useApi();
  const i18n = useI18n();
  const event = useEvent(eventId);
  const largeScreen = useMediaQuery('(min-width: 768px)');
  const [, navigate] = useLocation();
  const theme = useMantineTheme();
  const isDark = useMantineColorScheme().colorScheme === 'dark';
  const DataCmp = largeScreen ? Group : Stack;
  const globals = useContext(globalsCtx);
  const [players, , playersLoading] = useIsomorphicState(
    [],
    'RatingTable_event_' + eventId + order + orderBy,
    () =>
      api.getRatingTable(
        parseInt(eventId, 10),
        order ?? 'desc',
        orderBy === 'team' ? 'rating' : orderBy ?? 'rating'
      ),
    [eventId, order, orderBy]
  );

  if (!players || !event) {
    return null;
  }

  if (globals.data.loading) {
    return (
      <Container h='100%'>
        <Center h='100%'>
          <Loader size='xl' />
        </Center>
      </Container>
    );
  }

  if (event && !globals.data.loading && globals.data.ratingHidden) {
    return (
      <Container>
        <h2 style={{ display: 'flex', gap: '20px' }}>
          {event && <EventTypeIcon event={event} />}
          {event?.title} - {i18n._t('Rating table')}
        </h2>
        <Alert icon={<IconExclamationCircle />} color='yellow'>
          {i18n._t('Rating table is hidden by tournament administrator')}
        </Alert>
      </Container>
    );
  }

  return (
    event && (
      <Container>
        <DataCmp position='apart'>
          <h2 style={{ display: 'flex', gap: '20px' }}>
            {event && <EventTypeIcon event={event} />}
            {event?.title} - {i18n._t('Rating table')}
          </h2>
          {orderBy !== 'team' && (
            <Button
              variant='light'
              size='xs'
              leftIcon={<IconDownload size='1.1rem' />}
              onClick={() => {
                downloadCsv(
                  i18n,
                  event?.isTeam,
                  event?.withChips,
                  players,
                  `Rating_${event?.id}.csv`
                );
              }}
            >
              {i18n._t('Save as CSV')}
            </Button>
          )}
        </DataCmp>
        <Space h='md' />
        <Divider size='xs' />
        <Space h='md' />
        <DataCmp grow={largeScreen ? true : undefined}>
          <Stack>
            <DataCmp position='right' spacing='md'>
              <Group spacing='md' grow={!largeScreen}>
                {globals.data.isTeam && (
                  <Badge
                    size='lg'
                    color='grape'
                    radius='sm'
                    variant={orderBy === 'team' ? 'filled' : 'light'}
                    component={'a'}
                    pl={5}
                    pr={5}
                    leftSection={
                      <Box mt={7}>
                        <IconSortDescending2 size='1rem' />
                      </Box>
                    }
                    href={`/event/${event.id}/order/team`}
                    onClick={(e) => {
                      navigate(`/event/${event.id}/order/team`);
                      e.preventDefault();
                    }}
                    style={{ cursor: 'pointer' }}
                  >
                    {i18n._t('Team')}
                  </Badge>
                )}
                <Badge
                  size='lg'
                  color='lime'
                  radius='sm'
                  variant={orderBy === 'rating' ? 'filled' : 'light'}
                  component={'a'}
                  pl={5}
                  pr={5}
                  leftSection={
                    <Box mt={7}>
                      <IconSortDescending2 size='1rem' />
                    </Box>
                  }
                  href={`/event/${event.id}/order/rating`}
                  onClick={(e) => {
                    navigate(`/event/${event.id}/order/rating`);
                    e.preventDefault();
                  }}
                  style={{ cursor: 'pointer' }}
                >
                  {i18n._t('Rating')}
                </Badge>
              </Group>
              <Group spacing='md' grow={!largeScreen}>
                <Badge
                  size='lg'
                  color='green'
                  radius='sm'
                  variant={orderBy === 'avg_score' ? 'filled' : 'light'}
                  component={'a'}
                  pl={5}
                  pr={5}
                  leftSection={
                    <Box mt={7}>
                      <IconSortDescending2 size='1rem' />
                    </Box>
                  }
                  href={`/event/${event.id}/order/avg_score`}
                  onClick={(e) => {
                    navigate(`/event/${event.id}/order/avg_score`);
                    e.preventDefault();
                  }}
                  style={{ cursor: 'pointer' }}
                >
                  {i18n._t('Average score')}
                </Badge>
                <Badge
                  size='lg'
                  color='cyan'
                  radius='sm'
                  variant={orderBy === 'avg_place' ? 'filled' : 'light'}
                  component={'a'}
                  pl={5}
                  pr={5}
                  leftSection={
                    <Box mt={7}>
                      <IconSortAscending2 size='1rem' />
                    </Box>
                  }
                  href={`/event/${event.id}/order/avg_place`}
                  onClick={(e) => {
                    navigate(`/event/${event.id}/order/avg_place`);
                    e.preventDefault();
                  }}
                  style={{ cursor: 'pointer' }}
                >
                  {i18n._t('Average place')}
                </Badge>
              </Group>
            </DataCmp>
          </Stack>
        </DataCmp>
        <Space h='md' />
        <Divider size='xs' />
        <Space h='md' />
        <Box pos='relative'>
          <LoadingOverlay visible={playersLoading} overlayBlur={2} />
          {orderBy === 'team' && (
            <Stack justify='flex-start' spacing='0'>
              <TeamTable players={players} event={event} />
            </Stack>
          )}
          {orderBy !== 'team' && (
            <Stack justify='flex-start' spacing='0'>
              {(players ?? []).map((player, idx) => {
                return (
                  <DataCmp
                    key={`pl_${idx}`}
                    spacing='xs'
                    style={{
                      padding: '10px',
                      backgroundColor:
                        idx % 2
                          ? isDark
                            ? theme.colors.dark[7]
                            : theme.colors.gray[1]
                          : 'transparent',
                    }}
                  >
                    <Group style={{ flex: 1 }}>
                      <Badge w={50} size='xl' color='blue' radius='sm' style={{ padding: 0 }}>
                        {idx + 1}
                      </Badge>
                      <PlayerIcon p={player} />
                      <Stack spacing={2}>
                        <Anchor
                          href={`/event/${event.id}/player/${player.id}`}
                          onClick={(e) => {
                            navigate(`/event/${event.id}/player/${player.id}`);
                            e.preventDefault();
                          }}
                        >
                          {player.title}
                        </Anchor>
                        {event.type === EventType.EVENT_TYPE_ONLINE && (
                          <Text c='dimmed'>{player.tenhouId}</Text>
                        )}
                        {event.isTeam && player.teamName && <Text>{player.teamName}</Text>}
                      </Stack>
                    </Group>
                    <Group spacing={2} grow={!largeScreen}>
                      <Badge
                        w={75}
                        size='lg'
                        variant={orderBy === 'rating' ? 'filled' : 'light'}
                        color={player.winnerZone ? 'lime' : 'red'}
                        radius='sm'
                        style={{ padding: 0 }}
                      >
                        {player.rating}
                      </Badge>
                      <Badge
                        w={65}
                        size='lg'
                        variant={orderBy === 'avg_score' ? 'filled' : 'light'}
                        color={player.winnerZone ? 'green' : 'pink'}
                        radius='sm'
                        style={{ padding: 0 }}
                      >
                        {player.avgScore.toFixed(0)}
                      </Badge>
                      <Badge
                        w={45}
                        size='lg'
                        color='cyan'
                        variant={orderBy === 'avg_place' ? 'filled' : 'light'}
                        radius='sm'
                        style={{ padding: 0 }}
                      >
                        {player.avgPlace.toFixed(2)}
                      </Badge>
                      <Badge
                        title={i18n._t('Games played')}
                        w={45}
                        size='lg'
                        color='gray'
                        radius='sm'
                        style={{ padding: 0 }}
                      >
                        {player.gamesPlayed.toFixed(0)}
                      </Badge>
                      {event?.withChips && (
                        <Badge
                          title={i18n._t('Chips')}
                          w={45}
                          leftSection={<IconCoins size='0.8rem' style={{ marginTop: '8px' }} />}
                          size='lg'
                          color='yellow'
                          radius='sm'
                          style={{ padding: 0 }}
                        >
                          {player.chips.toFixed(0)}
                        </Badge>
                      )}
                    </Group>
                  </DataCmp>
                );
              })}
            </Stack>
          )}
        </Box>
      </Container>
    )
  );
};

function downloadCsv(
  i18n: I18nService,
  isTeam: boolean,
  withChips: boolean,
  content: PlayerInRating[],
  fileName: string,
  mimeType?: string
) {
  const quoteValue = (val: any) => {
    const innerValue: string = val === null ? '' : val.toString();
    let result = innerValue.replace(/"/g, '""');
    if (result.search(/("|,|\n)/g) >= 0) result = '"' + result + '"';
    return result;
  };

  const finalVal: string[] = [
    [
      i18n._t('Place'),
      i18n._t('Player ID'),
      i18n._t('Player name'),
      ...(isTeam ? [i18n._t('Team')] : []),
      ...(withChips ? [i18n._t('Chips')] : []),
      i18n._t('Rating points'),
      i18n._t('Average place'),
      i18n._t('Average points'),
      i18n._t('Games played'),
    ]
      .map(quoteValue)
      .join(','),
  ];

  for (let i = 0; i < content.length; i++) {
    finalVal.push(
      [
        i + 1,
        content[i].id,
        content[i].title,
        ...(isTeam ? [content[i].teamName] : []),
        ...(withChips ? [content[i].chips] : []),
        content[i].rating,
        content[i].avgPlace,
        content[i].avgScore,
        content[i].gamesPlayed,
      ]
        .map(quoteValue)
        .join(',')
    );
  }

  const a = document.createElement('a');
  mimeType = mimeType ?? 'application/octet-stream';

  if (URL && 'download' in a) {
    // html5 A[download]
    a.href = URL.createObjectURL(
      new Blob([finalVal.join('\n')], {
        type: mimeType,
      })
    );
    a.setAttribute('download', fileName);
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  } else {
    // only this mime type is supported
    location.href = 'data:application/octet-stream,' + encodeURIComponent(finalVal.join('\n'));
  }
}
