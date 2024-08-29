import React from 'react'
import { Outlet, Link } from 'react-router-dom';

const Admin = () => {
  return (
    <div>
        <h2>Admin Page</h2>
            <nav>
                <ul>
                    <li><Link to="user">User</Link></li>
                </ul>
            </nav>
            <Outlet />
    </div>
  )
}

export default Admin