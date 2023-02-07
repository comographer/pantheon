import React from 'react';
import { action } from '@storybook/addon-actions';
import { RonScreenView } from '#/components/screens/table/screens/select-plyers/RonScreenView';
import {
  bottomPlayer,
  leftPlayer,
  rightPlayer,
  topPlayer,
} from '#/components/screens/table/story/story-data/players';

export default {
  title: 'Screens/Ron',
  component: RonScreenView,
};

const actions = {
  onWinClick: action('onWinClick'),
  onLoseClick: action('onLoseClick'),
  onRiichiClick: action('onRiichiClick'),
  onBackClick: action('onBackClick'),
  onNextClick: action('onNextClick'),
};

const idleButtonState = {
  winButtonPressed: false,
  winButtonDisabled: false,
  loseButtonPressed: false,
  loseButtonDisabled: false,
  isRiichiPressed: false,
};

export const Demo = () => {
  return (
    <RonScreenView
      topPlayer={{
        ...topPlayer,
        ...idleButtonState,
        winButtonPressed: true,
        loseButtonDisabled: true,
      }}
      leftPlayer={{
        ...leftPlayer,
        ...idleButtonState,
        loseButtonDisabled: true,
      }}
      rightPlayer={{
        ...rightPlayer,
        ...idleButtonState,
        winButtonDisabled: true,
        loseButtonPressed: true,
        isRiichiPressed: true,
      }}
      bottomPlayer={{
        ...bottomPlayer,
        ...idleButtonState,
        loseButtonDisabled: true,
        isRiichiPressed: true,
      }}
      {...actions}
    />
  );
};

export const Multiron = () => {
  return (
    <RonScreenView
      topPlayer={{
        ...topPlayer,
        ...idleButtonState,
        winButtonPressed: true,
        loseButtonDisabled: true,
      }}
      leftPlayer={{
        ...leftPlayer,
        ...idleButtonState,
        winButtonPressed: true,
        loseButtonDisabled: true,
      }}
      rightPlayer={{
        ...rightPlayer,
        ...idleButtonState,
        winButtonDisabled: true,
        loseButtonPressed: true,
        isRiichiPressed: true,
      }}
      bottomPlayer={{
        ...bottomPlayer,
        ...idleButtonState,
        loseButtonDisabled: true,
        isRiichiPressed: true,
      }}
      {...actions}
    />
  );
};

export const Idle = () => {
  return (
    <RonScreenView
      topPlayer={{
        ...topPlayer,
        ...idleButtonState,
      }}
      leftPlayer={{
        ...leftPlayer,
        ...idleButtonState,
      }}
      rightPlayer={{
        ...rightPlayer,
        ...idleButtonState,
      }}
      bottomPlayer={{
        ...bottomPlayer,
        ...idleButtonState,
      }}
      {...actions}
      isNextDisabled
    />
  );
};
