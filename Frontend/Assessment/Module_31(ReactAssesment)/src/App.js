import React from 'react';
import { ThemeProvider, ThemeContext } from './ThemeContext';
import ThemeToggler from './ThemeToggler';
import './App.css';
import LoginPage from './LoginPage';

function App() {

  const { theme } = React.useContext(ThemeContext);

  return (
    <div>
      <ThemeProvider>
        <div className={`App ${theme}`}>
          <ThemeToggler />
          {/* Other components */}
          <LoginPage />
        </div>
      </ThemeProvider>
    </div>
  );
}

export default App;
