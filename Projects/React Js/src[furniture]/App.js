import { BrowserRouter, Route, Routes } from "react-router-dom";

import Index from "./Website/Pages/Index";
import About from "./Website/Pages/About";
import Service from "./Website/Pages/Service";
import Contact from "./Website/Pages/Contact";
import Project from "./Website/Pages/Project";
import Blog from "./Website/Pages/Blog";
import { ToastContainer } from "react-toastify";
import 'react-toastify/dist/ReactToastify.css';
import Login from "./Website/Pages/Login";
import Signup from "./Website/Pages/Signup";
import Adashboard from "./Admin/Pages/Adashboard";
import Admin_login from "./Admin/Pages/Admin_login";
import Add_cate from "./Admin/Pages/Add_cate";
import Manage_cate from "./Admin/Pages/Manage_cate";
import Add_prod from "./Admin/Pages/Add_prod";
import Manage_prod from "./Admin/Pages/Manage_prod";
import Manage_cust from "./Admin/Pages/Manage_cust";
import Manage_cont from "./Admin/Pages/Manage_cont";
import Manage_order from "./Admin/Pages/Manage_order";
import Manage_pay from "./Admin/Pages/Manage_pay";
import Profile from "./Website/Pages/Profile";
import Admin_profile from "./Admin/Pages/Admin_profile";
import View_service from "./Website/Pages/View_service";


function App() {
  return (
    <div>
      <BrowserRouter>
        <ToastContainer></ToastContainer>
        <Routes>
          {
            //Website 
          }
          <Route path="/" element={<><Index/></>}></Route>
          <Route path="/about" element={<><About/></>}></Route>
          <Route path="/service" element={<><Service/></>}></Route>
          <Route path="/view_service" element={<><View_service/></>}></Route>
          <Route path="/contact" element={<><Contact/></>}></Route>
          <Route path="/project" element={<><Project/></>}></Route>
          <Route path="/blog" element={<><Blog/></>}></Route>
          <Route path="/login" element={<><Login/></>}></Route>
          <Route path="/signup" element={<><Signup/></>}></Route>
          <Route path="/profile" element={<><Profile/></>}></Route>

          {
            //Admin 
          }
          <Route path="/admin_login" element={<><Admin_login/></>}></Route>
          <Route path="/admin_profile" element={<><Admin_profile/></>}></Route>
          <Route path="/dashboard" element={<><Adashboard/></>}></Route>
          <Route path="/add_cate" element={<><Add_cate/></>}></Route>
          <Route path="/manage_cate" element={<><Manage_cate/></>}></Route>
          <Route path="/add_prod" element={<><Add_prod/></>}></Route>
          <Route path="/manage_prod" element={<><Manage_prod/></>}></Route>
          <Route path="/manage_cust" element={<><Manage_cust/></>}></Route>
          <Route path="/manage_cont" element={<><Manage_cont/></>}></Route>
          <Route path="/manage_order" element={<><Manage_order/></>}></Route>
          <Route path="/manage_pay" element={<><Manage_pay/></>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
