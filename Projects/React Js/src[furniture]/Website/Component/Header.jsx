import React from 'react'
import { Helmet } from 'react-helmet'
import { Link, NavLink, useNavigate } from 'react-router-dom'
import { toast } from 'react-toastify';

function Header() {

  const redirect = useNavigate();
  const userlogout = () => {
    localStorage.removeItem('uid');
    localStorage.removeItem('uname');
    toast.success('Logout Success ');
    redirect('/');
    return false;
  }

  return (
    <>
      <div>
        {/* Topbar Start */}
        <div className="container-fluid bg-dark py-3">
          <div className="container">
            <div className="row">
              <div className="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div className="d-inline-flex align-items-center">
                  <a className="text-white pr-3" href>FAQs</a>
                  <span className="text-white">|</span>
                  <a className="text-white px-3" href>Help</a>
                  <span className="text-white">|</span>
                  <a className="text-white pl-3" href>Support</a>
                </div>
              </div>
              <div className="col-md-6 text-center text-lg-right">
                {(
                  () => {
                    if (localStorage.getItem('uid')) {
                      return (
                        <>
                          <small className="text-light"><i className="fa fa-user ms-5 me-2 pr-1" />Hi.. {localStorage.getItem('uname')}</small>
                          <small className="text-light"><i className="fa fa-user ms-5 me-2 pr-1 pl-3" /><Link to="/profile">My Account</Link></small>
                        </>
                      )
                    }
                  }
                )()}
                <div className="d-inline-flex align-items-center">
                  <a className="text-white px-3" href>
                    <i className="fab fa-facebook-f" />
                  </a>
                  <a className="text-white px-3" href>
                    <i className="fab fa-twitter" />
                  </a>
                  <a className="text-white px-3" href>
                    <i className="fab fa-linkedin-in" />
                  </a>
                  <a className="text-white px-3" href>
                    <i className="fab fa-instagram" />
                  </a>
                  <a className="text-white pl-3" href>
                    <i className="fab fa-youtube" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Topbar End */}
        {/* Navbar Start */}
        <div className="container-fluid position-relative nav-bar p-0">
          <div className="container position-relative" style={{ zIndex: 9 }}>
            <nav className="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
              <a href className="navbar-brand">
                <h1 className="m-0 display-5 text-white"><span className="text-primary">i</span>DESIGN</h1>
              </a>
              <button type="button" className="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span className="navbar-toggler-icon" />
              </button>
              <div className="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div className="navbar-nav ml-auto py-0">
                  <NavLink to="/" className="nav-item nav-link">Home</NavLink>
                  <NavLink to="/about" className="nav-item nav-link">About</NavLink>
                  <NavLink to="/service" className="nav-item nav-link">Service</NavLink>
                  <div className="nav-item dropdown">
                    <NavLink to="#" className="nav-link dropdown-toggle" data-toggle="dropdown">Pages</NavLink>
                    <div className="dropdown-menu rounded-0 m-0">
                      <NavLink to="/blog" className="dropdown-item">Blog Grid</NavLink>
                      <NavLink to="/view_service" className="dropdown-item">Product</NavLink>
                      <NavLink to="/project" className="dropdown-item">Project</NavLink>
                    </div>
                  </div>
                  <NavLink to="/contact" className="nav-item nav-link">Contact</NavLink>
                  {(
                    () => {
                      if (localStorage.getItem('uid')) {
                        return (
                          <a href="javascript:void(0)" onClick={userlogout} className="nav-item nav-link">Logout</a>
                        )
                      }
                      else {
                        return (
                          <Link to="/login" className="nav-item nav-link">Login</Link>
                        )
                      }
                    }
                  )()}
                  <button type="button" className="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i className="fa fa-search" /></button>
                </div>
              </div>
            </nav>
          </div>
        </div>
        {/* Navbar End */}
        {/* Under Nav Start */}
        <div className="container-fluid bg-white py-3">
          <div className="container">
            <div className="row">
              <div className="col-lg-4 text-left mb-3 mb-lg-0">
                <div className="d-inline-flex text-left">
                  <h1 className="flaticon-office font-weight-normal text-primary m-0 mr-3" />
                  <div className="d-flex flex-column">
                    <h5>Our Office</h5>
                    <p className="m-0">123 Street, New York, USA</p>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                <div className="d-inline-flex text-left">
                  <h1 className="flaticon-email font-weight-normal text-primary m-0 mr-3" />
                  <div className="d-flex flex-column">
                    <h5>Email Us</h5>
                    <p className="m-0">info@example.com</p>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                <div className="d-inline-flex text-left">
                  <h1 className="flaticon-telephone font-weight-normal text-primary m-0 mr-3" />
                  <div className="d-flex flex-column">
                    <h5>Call Us</h5>
                    <p className="m-0">+91 84345 67809</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Under Nav End */}
      </div>


      <Helmet>
        <link href="Website/img/favicon.ico" rel="icon" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="Website/lib/flaticon/font/flaticon.css" rel="stylesheet" />
        <link href="Website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
        <link href="Website/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
        <link href="Website/css/style.css" rel="stylesheet" />
      </Helmet>
    </>
  )
}

export default Header