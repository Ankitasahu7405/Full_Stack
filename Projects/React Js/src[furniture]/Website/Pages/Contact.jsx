import React, { useState } from 'react'
import axios from 'axios';
import Header from '../Component/Header'
import Footer from '../Component/Footer'
import { toast } from 'react-toastify';

function Contact() {

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    subject: "",
    comment: ""
  });
  const changeHandel = (e) => {
    setFormvalue({ ...formvalue, id: new Date().getTime().toString(), [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var res = true;
    if (formvalue.name == "") {
      toast.error("Name Field is required !");
      res = false;
      return false;
    }
    if (formvalue.email == "") {
      toast.error("Email Field is required !");
      res = false;
      return false;
    }
    if (formvalue.subject == "") {
      toast.error("subject Field is required !");
      res = false;
      return false;
    }

    if (formvalue.comment == "") {
      toast.error("comment Field is required !");
      res = false;
      return false;
    }
    return res;
  }
  const submitHandel = async (e) => {
    e.preventDefault(); // not reload page
    if (validation()) {
      const res = await axios.post(`http://localhost:3000/contact`, formvalue);
      //console.log(res);
      setFormvalue({ ...formvalue, id: "", name: "", email: "", subject: "", comment: "" });
      alert('Data insert success');
      return false;
    }
  }

  return (
    <div>
      <Header />
      <div>
        {/* Page Header Start */}
        <div className="container-fluid bg-secondary py-5">
          <div className="container py-5">
            <div className="row align-items-center py-4">
              <div className="col-md-6 text-center text-md-left">
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>Contact Us</a>
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
              <div className="col-lg-5">
                <div className="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                  <div className="d-inline-flex border border-secondary p-4 mb-4">
                    <h1 className="flaticon-office font-weight-normal text-secondary m-0 mr-3" />
                    <div className="d-flex flex-column">
                      <h4>Our Office</h4>
                      <p className="m-0 text-white">123 Street, New York, USA</p>
                    </div>
                  </div>
                  <div className="d-inline-flex border border-secondary p-4 mb-4">
                    <h1 className="flaticon-email font-weight-normal text-secondary m-0 mr-3" />
                    <div className="d-flex flex-column">
                      <h4>Email Us</h4>
                      <p className="m-0 text-white">info@example.com</p>
                    </div>
                  </div>
                  <div className="d-inline-flex border border-secondary p-4">
                    <h1 className="flaticon-telephone font-weight-normal text-secondary m-0 mr-3" />
                    <div className="d-flex flex-column">
                      <h4>Call Us</h4>
                      <p className="m-0 text-white">+012 345 6789</p>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                <div className="contact-form">
                  <div id="success" />
                  <form name="sentMessage" id="contactForm" method="post" onSubmit={submitHandel} noValidate="novalidate">
                    <div className="control-group">
                      <input type="text" className="form-control p-4" value={formvalue.name} onChange={changeHandel} name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group">
                      <input type="email" className="form-control p-4" value={formvalue.email} onChange={changeHandel} name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group">
                      <input type="text" className="form-control p-4" value={formvalue.subject} onChange={changeHandel} name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="control-group">
                      <textarea className="form-control p-4" rows={6} value={formvalue.comment} onChange={changeHandel} name="comment" placeholder="Message" required="required" data-validation-required-message="Please enter your message" defaultValue={""} />
                      <p className="help-block text-danger" />
                    </div>
                    <div>
                      <button className="btn btn-primary py-3 px-5" type="submit" name="sendMessageButton">Send Message</button>
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

export default Contact