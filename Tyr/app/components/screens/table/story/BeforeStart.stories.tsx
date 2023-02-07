import React from 'react';
import { action } from '@storybook/addon-actions';
import { BeforeStartScreenView } from '#/components/screens/table/screens/BeforeStartScreenView';
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

export const Demo = () => {
  return (
    <BeforeStartScreenView
      topPlayer={topPlayer}
      leftPlayer={leftPlayer}
      rightPlayer={rightPlayer}
      bottomPlayer={bottomPlayer}
      tableNumber={4}
      onHomeClick={action('onHomeClick')}
      onRefreshClick={action('onRefreshClick')}
    />
  );
};
