import React, { useState, useEffect } from 'react'
import axios from 'axios';
import { toast } from 'react-toastify';
import { useNavigate } from 'react-router-dom';
import { Helmet } from 'react-helmet'

function Admin_login() {

  const redirect = useNavigate();

  useEffect(() => {
    if (localStorage.getItem('aid')) {
      return redirect('/dashboard')
    }
  }, []);

  const [formvalue, setFormvalue] = useState({
    name: "",
    email: "",
  });
  const changeHandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var res = true;

    if (formvalue.email == "") {
      toast.error("Email Field is required !");
      res = false;
      return false;
    }
    if (formvalue.password == "") {
      toast.error("Password Field is required !");
      res = false;
      return false;
    }

    return res;
  }

  const submitHandel = async (e) => {
    e.preventDefault(); // not reload page
    if (validation()) {
      const res = await axios.get(`http://localhost:3000/Admin?email=${formvalue.email}`);
      console.log(res);
      if (res.data.length > 0) {
        if (res.data[0].password == formvalue.password) {

          // session create
          localStorage.setItem('aid', res.data[0].id);
          localStorage.setItem('aname', res.data[0].name);

          redirect('/dashboard');
          toast.success('Login Success ');
          return false;

        }
        else {
          setFormvalue({ ...formvalue, email: "", password: "" });
          toast.error('Wrong password');
          return false;
        }
      }
      else {
        setFormvalue({ ...formvalue, email: "", password: "" });
        toast.error('Email does not Exist');
        return false;
      }

    }
  }
  return (
    <div>
      <Helmet>
        <link href="Admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="Admin/css/style.css" rel='stylesheet' type='text/css' />
        <link href="Admin/css/font-awesome.css" rel="stylesheet" />
        <link href='Admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
        <script src="Admin/js/jquery-1.11.1.min.js"></script>
        <script src="Admin/js/modernizr.custom.js"></script>
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet" />
        <script src="Admin/js/Chart.js"></script>
        <script src="Admin/js/metisMenu.min.js"></script>
        <script src="Admin/js/custom.js"></script>
        <link href="Admin/css/custom.css" rel="stylesheet" />
      </Helmet>
      <div id="page-wrapper">
        <div className="main-page login-page ">
          <h2 className="title1">Login</h2>
          <div className="widget-shadow">
            <div className="login-body">
              <form action="#" method="post" onSubmit={submitHandel}>
                <input type="email" className="user" value={formvalue.email} onChange={changeHandel} name="email" placeholder="Enter Your Email" required />
                <input type="password" name="password" className="lock" value={formvalue.password} onChange={changeHandel} placeholder="Password" required />
                <div className="forgot-grid">
                  <label className="checkbox"><input type="checkbox" name="checkbox" defaultChecked /><i />Remember me</label>
                  <div className="forgot">
                    <a href="#">forgot password?</a>
                  </div>
                  <div className="clearfix"> </div>
                </div>
                <input type="submit" name="Sign In" defaultValue="Sign In" />
                <div className="registration">
                  Don't have an account ?
                  <a className href="signup.html">
                    Create an account
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  )
}

export default Admin_login