import React from 'react';
import { action } from '@storybook/addon-actions';
import { BeforeStartScreenView } from '#/components/screens/table/screens/overview/BeforeStartScreenView';
import {
  bottomPlayer,
  leftPlayer,
  rightPlayer,
  topPlayer,
} from '#/components/screens/table/story/story-data/players';

export default {
  title: 'Screens/BeforeStart',
  component: BeforeStartScreenView,
};

const actions = {
  onHomeClick: action('onHomeClick'),
  onRefreshClick: action('onRefreshClick'),
};

export const Demo = () => {
  return (
    <BeforeStartScreenView
      topPlayer={topPlayer}
      leftPlayer={leftPlayer}
      rightPlayer={rightPlayer}
      bottomPlayer={bottomPlayer}
      topRotated={false}
      tableNumber={4}
      {...actions}
    />
  );
};

export const SingleDevice = () => {
  return (
    <BeforeStartScreenView
      topPlayer={topPlayer}
      leftPlayer={leftPlayer}
      rightPlayer={rightPlayer}
      bottomPlayer={bottomPlayer}
      topRotated={true}
      tableNumber={4}
      {...actions}
    />
  );
};

export const Timer = () => {
  return (
    <BeforeStartScreenView
      topPlayer={topPlayer}
      leftPlayer={leftPlayer}
      rightPlayer={rightPlayer}
      bottomPlayer={bottomPlayer}
      topRotated={false}
      tableNumber={4}
      timer='5:12'
      {...actions}
    />
  );
};
