import React from 'react';
import { PlayerTextProps, PlayerText } from '#/components/general/player/partials/PlayerText';

type NameProps = Omit<PlayerTextProps, 'size' | 'verticalMaxHeight'> & {
  inlineWind?: string;
};

export const Name: React.FC<NameProps> = ({ inlineWind, children, ...restProps }) => (
  <PlayerText {...restProps} size='medium' verticalMaxHeight>
    {inlineWind !== undefined && <span className='player__inline-wind'>{inlineWind}</span>}
    {children}
  </PlayerText>
);
