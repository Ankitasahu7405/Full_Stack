import React, { Suspense, lazy } from 'react';
import { BrowserRouter as  Routes, Route } from 'react-router-dom';

const Admin = lazy(() => import('./pages/Admin/Admin'));
const User = lazy(() => import('./pages/Admin/User'));

function App() {
  return (
    <div>
      <Routes>
        <div>
          <nav>
            <ul>
              <li><link to="/">Home</link></li>
              <li><link to="/admin">Admin</link></li>
            </ul>
          </nav>

          <Suspense fallback={<div>Loading...</div>}>
            <Routes>
              <Route path="/" element={<div>Home Page</div>} />
              <Route path="/admin" element={<Admin/>}>
                  <Route path="user" element={<User />} />
              </Route>
            </Routes>
          </Suspense>
        </div>
      </Routes>
    </div>
  );
}

export default App;
