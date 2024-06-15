import React from 'react';
import { ThemeContext } from './ThemeContext';

const LoginPage = () => {
    const { theme, toggleTheme } = React.useContext(ThemeContext);

    return (
        <div className={`login-page ${theme}`}>
            <h1>Login Page</h1>
            <button onClick={toggleTheme}>
                Toggle Theme
            </button>
            {/* Login form components */}

            <form action="/action_page.php" method="post">
                <div className="imgcontainer">
                    <img src="img_avatar2.png" alt="Avatar" className="avatar" />
                </div>
                <div className="container">
                    <label htmlFor="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required />
                    <label htmlFor="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required />
                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" defaultChecked="checked" name="remember" /> Remember me
                    </label>
                </div>
                <div className="container" style={{ backgroundColor: '#f1f1f1' }}>
                    <button type="button" className="cancelbtn">Cancel</button>
                    <span className="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>

        </div>
    );
};

export default LoginPage;
