import React from 'react'
import { Helmet } from 'react-helmet'
import Header2 from '../component/Header2'

function Gallery() {
  return (
    <>
    <Helmet>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet" /> 

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

        <link href="/gallery/lib/animate/animate.min.css" rel="stylesheet" />
        <link href="/gallery/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
        <link href="/gallery/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />


        <link href="/gallery/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/gallery/css/style.css" rel="stylesheet" />

    </Helmet>
  <div>
  {/* Spinner Start */}
  {/* Spinner End */}
  {/* Navbar start */}
  <Header2 title='Gallery' />
  {/* Navbar End */}
  {/* Modal Search Start */}
  <div className="modal fade"  id="searchModal" tabIndex={-1} aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div className="modal-dialog modal-fullscreen">
      <div className="modal-content rounded-0">
        <div className="modal-header">
          <h5 className="modal-title" id="exampleModalLabel">Search by keyword</h5>
          <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div className="modal-body d-flex align-items-center">
          <div className="input-group w-75 mx-auto d-flex">
            <input type="search" className="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1" />
            <span id="search-icon-1" className="input-group-text p-3"><i className="fa fa-search" /></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* Modal Search End */}
  {/* Header Start */}
  
  {/* Header End */}
  {/* Gallery Start */}
  <div className="container-fluid gallery py-5">
    <div className="container py-5">
      <div className="text-center mx-auto mb-5" style={{maxWidth: 800 , marginTop :"-90px"}}>
        <p className="fs-4 text-uppercase text-primary">Our Gallery</p>
        <h1 className="display-4 mb-4">Let's See Our Gallery</h1>
      </div>
      <div className="tab-class text-center">
        <ul className="nav nav-pills d-inline-flex justify-content-center mb-5">
          <li className="nav-item">
            <a className="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
              <span className="text-dark" style={{width: 150}}>All Gallery</span>
            </a>
          </li>
          <li className="nav-item">
            <a className="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
              <span className="text-dark" style={{width: 150}}>Skin Care</span>
            </a>
          </li>
          <li className="nav-item">
            <a className="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
              <span className="text-dark" style={{width: 150}}>Stream Bath</span>
            </a>
          </li>
          <li className="nav-item">
            <a className="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
              <span className="text-dark" style={{width: 150}}>Stone Therapy</span>
            </a>
          </li>
          <li className="nav-item">
            <a className="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
              <span className="text-dark" style={{width: 150}}>Face Massage</span>
            </a>
          </li>
        </ul>
        <div className="tab-content">
          <div id="tab-1" className="tab-pane fade show p-0 active">
            <div className="row g-4">
              <div className="col-lg-12">
                <div className="row g-4">
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-1.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-1.jpg" data-lightbox="Gallery-1" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-2.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-2.jpg" data-lightbox="Gallery-2" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-3.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-3.jpg" data-lightbox="Gallery-3" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-4.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-4.jpg" data-lightbox="Gallery-4" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-5.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-5.jpg" data-lightbox="Gallery-5" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-6.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-6.jpg" data-lightbox="Gallery-6" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-7.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-7.jpg" data-lightbox="Gallery-7" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-8.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-8.jpg" data-lightbox="Gallery-8" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2" className="tab-pane fade show p-0">
            <div className="row g-4">
              <div className="col-lg-12">
                <div className="row g-4">
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-9.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-9.jpg" data-lightbox="Gallery-9" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-10.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-10.jpg" data-lightbox="Gallery-10" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-5.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-5.jpg" data-lightbox="Gallery-11" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-1.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Skin Care</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-1.jpg" data-lightbox="Gallery-12" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3" className="tab-pane fade show p-0">
            <div className="row g-4">
              <div className="col-lg-12">
                <div className="row g-4">
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-11.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-11.jpg" data-lightbox="Gallery-13" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-12.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-12.jpg" data-lightbox="Gallery-14" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-2.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-2.jpg" data-lightbox="Gallery-15" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-6.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stream Bath</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-6.jpg" data-lightbox="Gallery-16" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4" className="tab-pane fade show p-0">
            <div className="row g-4">
              <div className="col-lg-12">
                <div className="row g-4">
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-13.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-13.jpg" data-lightbox="Gallery-17" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-2.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-2.jpg" data-lightbox="Gallery-18" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-3.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-3.jpg" data-lightbox="Gallery-19" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-7.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Stone Therapy</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-7.jpg" data-lightbox="Gallery-20" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-5" className="tab-pane fade show p-0">
            <div className="row g-4">
              <div className="col-lg-12">
                <div className="row g-4">
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-4.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-4.jpg" data-lightbox="Gallery-21" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-6.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-6.jpg" data-lightbox="Gallery-22" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-8.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-8.jpg" data-lightbox="Gallery-23" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-14.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-14.jpg" data-lightbox="Gallery-24" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-4.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-4.jpg" data-lightbox="Gallery-25" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-3">
                    <div className="gallery-img">
                      <img className="img-fluid rounded w-100" src="img/gallery-8.jpg" alt />
                      <div className="gallery-overlay p-4">
                        <h4 className="text-secondary">Face Massage</h4>
                      </div>
                      <div className="search-icon">
                        <a href="img/gallery-8.jpg" data-lightbox="Gallery-26" className="my-auto"><i className="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* gallery End */}
  {/* Footer Start */}
  <div className="container-fluid footer py-5">
    <div className="container py-5">
      <div className="row g-5">
        <div className="col-md-6 col-lg-6 col-xl-3">
          <div className="footer-item">
            <h4 className="mb-4 text-white">Newsletter</h4>
            <p className="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tempor dui, non consectetur enim.</p>
            <div className="position-relative mx-auto rounded-pill">
              <input className="form-control rounded-pill border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email" />
              <button type="button" className="btn btn-primary btn-primary-outline-0 rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-6 col-xl-3">
          <div className="footer-item d-flex flex-column">
            <h4 className="mb-4 text-white">Our Services</h4>
            <a href><i className="fas fa-angle-right me-2" /> Facials</a>
            <a href><i className="fas fa-angle-right me-2" /> Waxing</a>
            <a href><i className="fas fa-angle-right me-2" /> Message</a>
            <a href><i className="fas fa-angle-right me-2" /> Minarel baths</a>
            <a href><i className="fas fa-angle-right me-2" /> Body treatments</a>
            <a href><i className="fas fa-angle-right me-2" /> Aroma Therapy</a>
            <a href><i className="fas fa-angle-right me-2" /> Stone Spa</a>
          </div>
        </div>
        <div className="col-md-6 col-lg-6 col-xl-3">
          <div className="footer-item d-flex flex-column">
            <h4 className="mb-4 text-white">Schedule</h4>
            <p className="text-muted mb-0">Monday: <span className="text-white"> 09:00 am – 10:00 pm</span></p>
            <p className="text-muted mb-0">Saturday: <span className="text-white"> 09:00 am – 08:00 pm</span></p>
            <p className="text-muted mb-0">Sunday: <span className="text-white"> 09:00 am – 05:00 pm</span></p>
            <h4 className="my-4 text-white">Address</h4>
            <p className="mb-0"><i className="fas fa-map-marker-alt text-secondary me-2" /> 123 ranking street North tower New York, USA</p>
          </div>
        </div>
        <div className="col-md-6 col-lg-6 col-xl-3">
          <div className="footer-item d-flex flex-column">
            <h4 className="mb-4 text-white">Follow Us</h4>
            <a href><i className="fas fa-angle-right me-2" /> Faceboock</a>
            <a href><i className="fas fa-angle-right me-2" /> Instagram</a>
            <a href><i className="fas fa-angle-right me-2" /> Twitter</a>
            <h4 className="my-4 text-white">Contact Us</h4>
            <p className="mb-0"><i className="fas fa-envelope text-secondary me-2" /> info@example.com</p>
            <p className="mb-0"><i className="fas fa-phone text-secondary me-2" /> (+012) 3456 7890 123</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* Footer End */}
  {/* Copyright Start */}
  <div className="container-fluid copyright py-4">
    <div className="container">
      <div className="row g-4 align-items-center">
        <div className="col-md-4 text-center text-md-start mb-md-0">
          <span className="text-light"><a href="#"><i className="fas fa-copyright text-light me-2" />Your Site Name</a>, All right reserved.</span>
        </div>
        <div className="col-md-4">
          <div className="d-flex justify-content-center">
            <a href className="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i className="fab fa-facebook-f" /></a>
            <a href className="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i className="fab fa-twitter" /></a>
            <a href className="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i className="fab fa-instagram" /></a>
            <a href className="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-0"><i className="fab fa-linkedin-in" /></a>
          </div>
        </div>
        <div className="col-md-4 text-center text-md-end text-white">
          {/*/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. *** /*/}
          {/*/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, *** /*/}
          {/*/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". *** /*/}
          Designed By <a className="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a className="border-bottom" href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
    </div>
  </div>
  {/* Copyright End */}
</div>
<Helmet>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/gallery/lib/wow/wow.min.js"></script>
    <script src="/gallery/lib/easing/easing.min.js"></script>
    <script src="/gallery/lib/waypoints/waypoints.min.js"></script>
    <script src="/gallery/lib/counterup/counterup.min.js"></script>
    <script src="/gallery/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/gallery/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="/gallery/js/main.js"></script>
</Helmet>
    </>
  )
}

export default Gallery
