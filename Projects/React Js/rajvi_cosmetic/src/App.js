import { BrowserRouter,Routes,Route } from "react-router-dom";
import Home from "./website/pages/Home";
import Contact from "./website/pages/Contact";
import Admin_login from "./admin/pages/Admin_login";
import Dashboard from "./admin/pages/Dashboard";
import Add_categories from "./admin/pages/Add_categories";
import Manage_categories from "./admin/pages/Manage_categories";
import Add_services from "./admin/pages/Add_services";
import Add_blog from "./admin/pages/Add_blog";
import Manage_services from "./admin/pages/Manage_services";
import Manage_blog from "./admin/pages/Manage_blog";
import Manage_contact from "./admin/pages/Manage_contact";
import Manage_customer from "./admin/pages/Manage_customer";
import Login from "./website/pages/Login";
import Signup from "./website/pages/Signup";
import About from "./website/pages/About";
import Services from "./website/pages/Services";
import View_service from "./website/pages/View_Service";
import Blog from "./website/pages/Blog";
import Details_Services from "./website/pages/Details_Services";
import View_details from "./website/pages/View_details";
import Profile from "./website/pages/Profile";
import Gallery from "./website/pages/Gallery";
import Header2 from "./website/component/Header2";
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Services_details from "./website/pages/Services_details";
import Header1 from "./website/component/Header1";
import Appointmet_Mange from "./admin/pages/Appointmet_Mange";
import Admin_Signup from "./admin/pages/Admin_Signup";
import Edit_profile from "./website/pages/Edit_profile";

function App() {
  return (
   <>
   <ToastContainer />

   <BrowserRouter>
    <Routes>
      {// Websites
      }
      <Route path="/" element={<> <Header1/>  <Home/></>}></Route>
      <Route path="/contact" element={<Contact/>}></Route>
      <Route path="/login" element={<Login/>}></Route>
      <Route path="/signup" element={<Signup/>}></Route>
      <Route path="/about" element={<> <Header2  title="About Us"/> <About/> </>}></Route>
      <Route path="/services" element={<Services/>}></Route>
      <Route path="/view_services" element={<View_service/>}></Route>
      <Route path="/blog" element={<> <Header2  title="View Blog"/> <Blog/></>}></Route>
      <Route path="/details" element={<Details_Services />}></Route>
      <Route path="/view_details/:id" element={<View_details />}> </Route>
      <Route path="/profile" element={<Profile />}></Route>
      {/* <Route path="/edit_profile" element={<Edit_profile />}></Route> */}
      <Route path="/gallery" element={<Gallery />}></Route>
      <Route path="/edit_profile/:id" element={<Edit_profile />}></Route>
      {// admin roues
      }

      <Route path="/admin-login" element={<Admin_login/>}></Route>
      <Route path="/dashboard" element={<Dashboard/>}></Route>
      <Route path="/add_categories" element={<Add_categories/>}></Route>
      <Route path="/manage_categories" element={<Manage_categories/>}></Route>
      <Route path="/add_services" element={<Add_services/>}></Route>
      <Route path="/manage_services" element={<Manage_services/>}></Route>
      <Route path="/add_blog" element={<Add_blog/>}></Route>
      <Route path="/manage_blog" element={<Manage_blog/>}></Route>
      <Route path="/manage_contact" element={<Manage_contact/>}></Route>
      <Route path="/manage_customer" element={<Manage_customer/>}></Route>
      <Route path="/services_details/:cate_id" element={<Services_details />}></Route>
      <Route path="/manage_appointment" element={<Appointmet_Mange />}></Route>     
      {/* <Route path="/Ad" element={<Ad}*/}
    <Route path="/admin_sign" element={<Admin_Signup />}></Route>
    </Routes>
   </BrowserRouter>
   </>
  );
}

export default App;
