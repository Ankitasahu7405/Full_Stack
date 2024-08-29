import React, { useState,useEffect } from 'react'
import axios from 'axios';
import Header from '../Component/Header'
import Footer from '../Component/Footer'
import { Link,useNavigate } from 'react-router-dom';
import { toast } from 'react-toastify';

function Signup() {
    const redirect=useNavigate();

    useEffect(()=>{
        if(localStorage.getItem('uid'))
        {
            redirect('/');
        }
    });
    
    const [formvalue,setFormvalue]=useState({
        id: "",
        name: "",
        email: "",
        password:"",
        mobile:"",
        status:"",
        img:""
     });   
     const changeHandel=(e)=>{
        setFormvalue({...formvalue,id:new Date().getTime().toString(),status:"Unblock",[e.target.name]:e.target.value});
        console.log(formvalue);
     }
    
    function validation()
    {
        var res=true;
        if(formvalue.name=="")
        {
            toast.error("Name Field is required !");
            res=false;
            return false;
        }
        if(formvalue.email=="")
        {
            toast.error("Email Field is required !");
            res=false;
            return false;
        }
        if(formvalue.password=="")
        {
            toast.error("Password Field is required !");
            res=false;
            return false;
        }
        
        if(formvalue.mobile=="")
        {
            toast.error("Mobile Field is required !");
            res=false;
            return false;
        }
        if(formvalue.img=="")
        {
            toast.error("Add Image URL Field is required !");
            res=false;
            return false;
        }
        return res;
    } 


    const submitHandel=async(e)=>{
        e.preventDefault(); // not reload page
        if(validation())
        {
            const res=await axios.post(`http://localhost:3000/customer`,formvalue);
            //console.log(res);
            setFormvalue({...formvalue,id:"",name:"",email:"",password:"",mobile:"",img:""});
            toast.success('Signup Success');
            return false;
        }
    }
  return (
    <div>
       <Header/>
      <div>
        {/* Page Header Start */}
        <div className="container-fluid bg-secondary py-5">
          <div className="container py-5">
            <div className="row align-items-center py-4">
              <div className="col-md-6 text-center text-md-left">
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">Sign Up</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Page Header Start */}
        {/* Contact Start */}
        <div className="container-fluid bg-white">
          <div className="container">
            <div className="row">
              <div className="col-lg-10 mb-5 my-lg-5 py-5 pl-lg-5">
                <div className="contact-form">
                  <div id="success" />
                  <form name="sentMessage" action="" method="post" onSubmit={submitHandel} id="contactForm" noValidate="novalidate">
                    <div className="control-group" style={{ marginLeft: 170}}>
                      <input type="text" className="form-control p-4" value={formvalue.name} onChange={changeHandel} name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group" style={{ marginLeft: 170}}>
                      <input type="email" className="form-control p-4" value={formvalue.email} onChange={changeHandel} name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group" style={{ marginLeft: 170}}>
                      <input type="password" className="form-control p-4" value={formvalue.password} onChange={changeHandel} name="password" placeholder="Your Password" required="required" data-validation-required-message="Please enter your name" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group" style={{ marginLeft: 170}}>
                      <input type="number" className="form-control p-4" value={formvalue.mobile} onChange={changeHandel} name="mobile" placeholder="Your Mobile" required="required" data-validation-required-message="Please enter your email" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group" style={{ marginLeft: 170}}>
                      <input type="url" className="form-control p-4" value={formvalue.img} onChange={changeHandel} name="img" placeholder="Image Url" required="required" data-validation-required-message="Please enter your email" />
                      <p className="help-block text-danger" />
                    </div>
                    <div>
                      <div style={{ marginLeft: 180}}><Link to="/login">If you already Registered then Login here</Link></div>
                      <button className="btn btn-primary my-lg-2 py-3 px-5" style={{ marginLeft: 460}} type="submit" id="sendMessageButton"><b>Sign UP</b></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Contact End */}
      </div>

      <Footer /> 
    </div>
  )
}

export default Signup