import * as React from "react";
import './page-enter-credentials.css'
import {useContext, useState} from 'react';
import {i18n} from "#/components/i18n";

type IProps = {
  onSubmit: (email: string, password: string) => void
}

export const EnterCredentialsView: React.FC<IProps> = ({onSubmit}) => {
  const loc = useContext(i18n);
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  return (
    <div className="page-enter-credentials">
      <div className="page-enter-credentials__title">
        {loc._t('Pantheon: log in')}
      </div>
      <div className="page-enter-credentials__form">
        <input className={'page-enter-credentials__input'} type={'text'}
               onChange={(e) => setEmail(e.currentTarget.value)} />
        <label>{loc._t('Email')}</label>
        <br/><br/>
        <input className={'page-enter-credentials__input'} type={'password'}
               onChange={(e) => setPassword(e.currentTarget.value)} />
        <label>{loc._t('Password')}</label>
      </div>
      <div className="page-enter-credentials__button-container">
        <button className="flat-btn flat-btn--large" onClick={() => onSubmit(email, password)}>
          {loc._t('OK')}
        </button>
      </div>
    </div>
  );
}