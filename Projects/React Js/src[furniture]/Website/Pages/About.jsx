import React from 'react'
import Header from '../Component/Header'
import Footer from '../Component/Footer'

function About() {
  return (
    <div>
      <Header />
      <div>
        {/* Page Header Start */}
        <div className="container-fluid bg-secondary py-5">
          <div className="container py-5">
            <div className="row align-items-center py-4">
              <div className="col-md-6 text-center text-md-left">
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>About Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Page Header Start */}
        {/* About Start */}
        <div className="container-fluid bg-light">
          <div className="container">
            <div className="row">
              <div className="col-lg-5">
                <div className="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                  <i className="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3" />
                  <h4 className="display-3 mb-3">25+</h4>
                  <h1 className="m-0">Years Experience</h1>
                </div>
              </div>
              <div className="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h6 className="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                <h1 className="mb-4 section-title">We Are The Best Interior Designing Firm In Your City</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <div className="row py-2">
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-house font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Project Planning</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-stairs font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Exterior &amp; Interior</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-office font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Commercial Design</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-living-room font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Residential Design</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* About End */}
        {/* Features Start */}
        <div className="container-fluid bg-white">
          <div className="container">
            <div className="row">
              <div className="col-lg-7 mt-5 py-5 pr-lg-5">
                <h6 className="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                <h1 className="mb-4 section-title">25+ Years Experience In The Interior Design Industry</h1>
                <p className="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <ul className="list-inline">
                  <li><h5><i className="far fa-check-square text-primary mr-3" />25+ Years Experience</h5></li>
                  <li><h5><i className="far fa-check-square text-primary mr-3" />Best Interior Design</h5></li>
                  <li><h5><i className="far fa-check-square text-primary mr-3" />Customer Satisfaction</h5></li>
                </ul>
                <a href className="btn btn-primary mt-3 py-2 px-4">View More</a>
              </div>
              <div className="col-lg-5">
                <div className="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                  <img className="h-100" src="Website/img/feature.jpg" alt />
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Features End */}
        {/* Team Start */}
        <div className="container-fluid bg-light">
          <div className="container">
            <div className="row">
              <div className="col-md-4 col-sm-6">
                <div className="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                  <h6 className="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                  <h1 className="mb-0 text-center">Meet Our Team Members</h1>
                </div>
              </div>
              <div className="col-md-8 col-sm-6 p-0 py-sm-5">
                <div className="owl-carousel team-carousel position-relative p-0 py-sm-5">
                  <div className="team d-flex flex-column text-center mx-3">
                    <div className="position-relative">
                      <img className="img-fluid w-100" src="Website/img/team-1.jpg" alt />
                      <div className="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-twitter" /></a>
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-facebook-f" /></a>
                        <a className="btn btn-outline-primary text-center px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-linkedin-in" /></a>
                      </div>
                    </div>
                    <div className="d-flex flex-column bg-secondary text-center py-3">
                      <h5 className="text-white">Name Goes Here</h5>
                      <p className="m-0">Designation</p>
                    </div>
                  </div>
                  <div className="team d-flex flex-column text-center mx-3">
                    <div className="position-relative">
                      <img className="img-fluid w-100" src="Website/img/team-2.jpg" alt />
                      <div className="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-twitter" /></a>
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-facebook-f" /></a>
                        <a className="btn btn-outline-primary text-center px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-linkedin-in" /></a>
                      </div>
                    </div>
                    <div className="d-flex flex-column bg-secondary text-center py-3">
                      <h5 className="text-white">Name Goes Here</h5>
                      <p className="m-0">Designation</p>
                    </div>
                  </div>
                  <div className="team d-flex flex-column text-center mx-3">
                    <div className="position-relative">
                      <img className="img-fluid w-100" src="Website/img/team-3.jpg" alt />
                      <div className="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-twitter" /></a>
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-facebook-f" /></a>
                        <a className="btn btn-outline-primary text-center px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-linkedin-in" /></a>
                      </div>
                    </div>
                    <div className="d-flex flex-column bg-secondary text-center py-3">
                      <h5 className="text-white">Name Goes Here</h5>
                      <p className="m-0">Designation</p>
                    </div>
                  </div>
                  <div className="team d-flex flex-column text-center mx-3">
                    <div className="position-relative">
                      <img className="img-fluid w-100" src="Website/img/team-4.jpg" alt />
                      <div className="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-twitter" /></a>
                        <a className="btn btn-outline-primary text-center mr-2 px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-facebook-f" /></a>
                        <a className="btn btn-outline-primary text-center px-0" style={{ width: 38, height: 38 }} href="#"><i className="fab fa-linkedin-in" /></a>
                      </div>
                    </div>
                    <div className="d-flex flex-column bg-secondary text-center py-3">
                      <h5 className="text-white">Name Goes Here</h5>
                      <p className="m-0">Designation</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Team End */}
      </div>

      <Footer />
    </div>
  )
}

export default About