import React from 'react';
import { ThemeContext } from './ThemeContext';

const ThemeToggler = () => {
  const { theme, toggleTheme } = React.useContext(ThemeContext);

  return (
    <div>
      <p>Current Theme: {theme}</p>
      <button onClick={toggleTheme}>
        Toggle Theme
      </button>
    </div>
  );
};

export default ThemeToggler;
