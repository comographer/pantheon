import { Button, Menu } from '@mantine/core';
import * as React from 'react';
import { IconLogin, IconUserPlus } from '@tabler/icons-react';
import { Link } from 'wouter';
import { useI18n } from '#/hooks/i18n';

export const MainMenu: React.FC = () => {
  const i18n = useI18n();
  return (
    <Menu shadow='md' width={200}>
      <Menu.Target>
        <Button>Menu {/*Translate*/}</Button>
      </Menu.Target>

      <Menu.Dropdown>
        {/*<Menu.Label>Application</Menu.Label>*/}
        <Link to='profile/login'>
          <Menu.Item icon={<IconLogin size={18} />}>{i18n._t('Sign in')}</Menu.Item>
        </Link>
        <Link to='profile/signup'>
          <Menu.Item icon={<IconUserPlus size={18} />}>{i18n._t('Sign up')}</Menu.Item>
        </Link>
        {/*<Menu.Item icon={<IconSettings size={14} />}>Settings</Menu.Item>*/}
        {/*<Menu.Item icon={<IconMessageCircle size={14} />}>Messages</Menu.Item>*/}
        {/*<Menu.Item icon={<IconPhoto size={14} />}>Gallery</Menu.Item>*/}
        {/*<Menu.Item*/}
        {/*  icon={<IconSearch size={14} />}*/}
        {/*  rightSection={<Text size="xs" color="dimmed">⌘K</Text>}*/}
        {/*>*/}
        {/*  Search*/}
        {/*</Menu.Item>*/}

        {/*<Menu.Divider />*/}

        {/*<Menu.Label>Danger zone</Menu.Label>*/}
        {/*<Menu.Item icon={<IconArrowsLeftRight size={14} />}>Transfer my data</Menu.Item>*/}
        {/*<Menu.Item color="red" icon={<IconTrash size={14} />}>Delete my account</Menu.Item>*/}
      </Menu.Dropdown>
    </Menu>
  );
};
