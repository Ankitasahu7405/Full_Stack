import React from 'react';
import { Provider } from 'react-redux';
import Store from './app/Store';
import Register from './components/Register';
import Login from './components/Login';
import UserList from './components/Userlist';

function App() {
  return (
    <div>
      <Provider store={Store}>
        <div>
          <Register />
          <Login />
          <UserList />
        </div>
      </Provider>
    </div>
  );
}

export default App;
