import React, { useState, useEffect } from 'react'
import axios from 'axios'
import Header from '../Component/Header'
import Footer from '../Component/Footer'
import { useNavigate } from 'react-router-dom';
import { Link } from 'react-router-dom';

function Service() {

  const redirect = useNavigate();

  const [data, setData] = useState([]);

  useEffect(() => {
    fetch()
  }, []);

  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/Category`);
    console.log(res.data);
    setData(res.data);
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
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Page Header Start */}
        {/* Services Start */}
        <div className="container-fluid py-5">
          <div className="container py-5">
            <div className="row">
              <div className="col-lg-12 pr-lg-5">
                <h6 className="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                <h1 className="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                <p>Furniture consists of large objects such as tables, chairs, or beds that are used in a room for sitting or lying on or for putting things on or in. Each piece of furniture in their home suited the style of the house. Synonyms: household goods, furnishings, fittings, house fittings More Synonyms of furniture.</p>
                {/*<a href className="btn btn-primary mt-3 ml-8 py-2 px-4">View More</a>*/}
              </div>

              <div className="container-fluid bg-light pt-2">
                <div className="container py-5">
                  <div className="row pb-3">
                    {
                      data && data.map((value, index, arr) => {
                        return (
                          <div className="col-md-4 mb-4">
                            <div className="card border-0 mb-2">
                              <Link to={'/view_service/'+value.cate_id}>
                                <img className="card-img-top" src={value.cate_image} alt />
                                <div className="card-body bg-white p-4">
                                  <div className="d-flex align-items-center mb-3">
                                    <a className="btn btn-primary" href><i className="fa fa-link" /></a>
                                    <h5 className="m-0 ml-3 text-truncate">{value.cate_name}</h5>
                                  </div>
                                  <p>{value.description}</p>
                                  <div className="d-flex" style={{ marginLeft: 5 }}>
                                    <small className="mr-3"><i className="fa fa-user text-primary" /> People</small>
                                    <small className="mr-3"><i className="fa fa-folder text-primary" /> Comments</small>
                                    <small className="mr-3"><i className="fa fa-comments text-primary" /> 15</small>
                                    <small className="mr-3"><i className="fa fa-users text-primary" /> 300</small>
                                  </div>
                                  <div className="container mt-3" style={{ marginLeft: 48 }}>
                                    <a className="btn1 btn-primary btn-arrow" role="button" onClick={() => redirect('/view_service/'+value.prod_id)} href="javascript:void(0)">
                                      <span>View More
                                        <i className="fas fa-arrow-right" />
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </Link>
                            </div>
                          </div>
                        )
                      })
                    }

                    <div className="col-md-12 mb-4">
                      <nav aria-label="Page navigation">
                        <ul className="pagination justify-content-center mb-0">
                          <li className="page-item disabled">
                            <a className="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">«</span>
                              <span className="sr-only">Previous</span>
                            </a>
                          </li>
                          <li className="page-item active"><a className="page-link" href="#">1</a></li>
                          <li className="page-item"><a className="page-link" href="#">2</a></li>
                          <li className="page-item"><a className="page-link" href="#">3</a></li>
                          <li className="page-item">
                            <a className="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">»</span>
                              <span className="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Services End */}
        {/* Features Start */}
        <div className="container-fluid bg-light">
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
        {/* Testimonial Start */}
        <div className="container-fluid">
          <div className="container">
            <div className="row">
              <div className="col-md-5">
                <div className="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                  <img className="h-100" src="Website/img/testimonial.jpg" alt />
                </div>
              </div>
              <div className="col-md-7 py-5 pl-md-5">
                <h6 className="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                <h1 className="mb-4 section-title">What Our Clients Say</h1>
                <div className="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                  <div className="d-flex flex-column">
                    <div className="d-flex align-items-center mb-3">
                      <img className="img-fluid rounded-circle" src="Website/img/testimonial-1.jpg" style={{ width: 60, height: 60 }} alt />
                      <div className="ml-3">
                        <h5>Client Name</h5>
                        <i>Profession</i>
                      </div>
                    </div>
                    <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                  </div>
                  <div className="d-flex flex-column">
                    <div className="d-flex align-items-center mb-3">
                      <img className="img-fluid rounded-circle" src="Website/img/testimonial-2.jpg" style={{ width: 60, height: 60 }} alt />
                      <div className="ml-3">
                        <h5>Client Name</h5>
                        <i>Profession</i>
                      </div>
                    </div>
                    <p className="m-0">Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Testimonial End */}
      </div>

      <Footer />
    </div>
  )
}

export default Service