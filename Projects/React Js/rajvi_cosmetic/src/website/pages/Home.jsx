import React, { useEffect, useState } from "react";
import Header1 from "../component/Header1";
import Footer from "../component/Footer";
import { Helmet } from "react-helmet";
import axios from "axios";
import { Link } from "react-router-dom";
import { toast } from "react-toastify";

function Home() {
  //   useEffect(() => {
  //     setTimeout(() => {
  //       setLoading(false);
  //     }, 2000);
  //   });
  //   const [loading, setLoading] = useState(true);
  //   if (loading) {
  //     return (
  //       <center style={{ marginTop: "60vh" }}>
  //         <div class="spinner-grow text-primary" role="status">
  //           <span class="sr-only">Loading...</span>
  //         </div>
  //         <div class="spinner-grow text-secondary" role="status">
  //           <span class="sr-only">Loading...</span>
  //         </div>
  //       </center>
  //     );
  //   }

  useEffect(() => {
    fetch();
  }, []);
  const [data, setData] = useState([]);
  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/categories`);
    console.log(res.data);
    setData(res.data);
  };

  const [formvalue, setFormvalue] = useState({
    
    cate_id: "",
    service: "",
    app_Date: "",
  });

 

  const onchagehandle = async (e) => {
    setFormvalue({
      ...formvalue,
      id: new Date()
        .getTime()
        .toString() /* cust_id:localStorage.getItem('userid') */,
      [e.target.name]: e.target.value,
    });
    // const res = await axios.get(
    //   `http://localhost:3000/services?cate_id=${formvalue.cate_id}`
    // );
    // console.log(res.data);
    // setData1(res.data);

    console.log(formvalue.id);
  };
   const [data1, setData1] = useState([]);
  const changecategories = async (e) => {
    setFormvalue({
      ...formvalue,
      id: new Date()
        .getTime()
        .toString() /* cust_id:localStorage.getItem('userid') */,
      [e.target.name]: e.target.value, userid:localStorage.getItem('userid')
    });
    const res = await axios.get(
      `http://localhost:3000/services?cate_id=${e.target.value}`
    );
    console.log(res.data);
    setData1(res.data);

    console.log(formvalue.id);
  };
  
  const submithandle = async (i) => {
    i.preventDefault();
    if (localStorage.getItem("userid")) {
      const res = await axios.post(
        `http://localhost:3000/appointment`,
        formvalue
      );
      console.log(res);
      if (res.status == 201) {
        // alert("data success");
        toast.success("data success");
      }
    } else {
      //   alert("Please Login First");
      toast.success("Please Login First");
      return false;
    }
  };
  return (
    <>
      <Helmet>
        <link href="/alldata/img/favicon.ico" rel="icon" />

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet"
        />

        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"
        />

        <link href="/alldata/lib/animate/animate.min.css" rel="stylesheet" />
        <link
          href="/alldata/lib/owlcarousel/assets/owl.carousel.min.css"
          rel="stylesheet"
        />
        <link
          href="/alldata/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
          rel="stylesheet"
        />

        <link href="/alldata/css/style.css" rel="stylesheet" />
      </Helmet>
      <div>
        {/* <Header1/> */}
        {/* About Start */}
        <div className="container-fluid py-5">
          <div className="container py-5">
            <div className="row align-items-center">
              <div className="col-lg-6 pb-5 pb-lg-0">
                <img
                  className="img-fluid w-100"
                  src="website/img/about.jpg"
                  alt
                />
              </div>
              <div className="col-lg-6">
                <h6 className="d-inline-block text-primary text-uppercase bg-light py-1 px-2">
                  About Us
                </h6>
                <h1 className="mb-4">
                  Your Best Spa, Beauty &amp; Skin Care Center
                </h1>
                <p className="pl-4 border-left border-primary">
                  Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam
                  dolore sed et. Sit rebum labore sit sit ut vero no sit. Et
                  elitr stet dolor sed sit et sed ipsum et kasd erat duo eos et
                  erat
                </p>
                <div className="row pt-3">
                  <div className="col-6">
                    <div className="bg-light text-center p-4">
                      <h3
                        className="display-4 text-primary"
                        data-toggle="counter-up"
                      >
                        99z
                      </h3>
                      <h6 className="text-uppercase">Spa Specialist</h6>
                    </div>
                  </div>
                  <div className="col-6">
                    <div className="bg-light text-center p-4">
                      <h3
                        className="display-4 text-primary"
                        data-toggle="counter-up"
                      >
                        999
                      </h3>
                      <h6 className="text-uppercase">Happy Clients</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* About End */}
        {/* Service Start */}
        <div className="container-fluid px-0 py-5 my-5">
          <div className="row mx-0 justify-content-center text-center">
            <div className="col-lg-6">
              <h6 className="d-inline-block bg-light text-primary text-uppercase py-1 px-2">
                Our Service
              </h6>
              <h1>Spa &amp; Beauty Services</h1>
            </div>
          </div>
          <div className="owl-carousel service-carousel">
            {data &&
              data.map((value, index) => {
                return (
                  <div key={index} className="service-item position-relative">
                    {/* <Link to={`/view_details/${value.id}`}> */}
                    <img src={value.cate_img} alt="" />
                    {/* </Link> */}
                    {/* <img className="img-fluid" src="/alldata/img/service-1.jpg" alt /> */}
                    <div className="service-text text-center">
                      <h4 className="text-white font-weight-medium px-3">
                        {value.cate_name}
                      </h4>
                      <p className="text-white px-3 mb-3">
                        Elitr labore sit dolor erat est lorem diam sea ipsum
                        diam dolor duo sit ipsum
                      </p>
                      <div className="w-100 bg-white text-center p-4">
                        <Link
                          to={"/services_details/" + value.id}
                          // to={`/view_details/${value.id}`}
                          className="btn btn-primary"
                        >
                          More Service
                        </Link>
                      </div>
                    </div>
                  </div>
                );
              })}
          </div>

          <div className="row justify-content-center bg-appointment mx-0">
            <div className="col-lg-6 py-5">
              <div
                className="p-5 my-5"
                style={{ background: "rgba(33, 30, 28, 0.7)" }}
              >
                <h1 className="text-white text-center mb-4">
                  Make Appointment
                </h1>
                <form
                  action=""
                  role="form"
                  method="post"
                  onSubmit={submithandle}
                >
                  <div className="form-row">
                    <div className="col-sm-12">
                      <div className="form-group">
                        <select
                          // onChange={onchagehandle}
                          value={formvalue.cate_id}
                          onChange={(e)=>  changecategories(e)}
                          name="cate_id"
                          className="form-control bg-transparent p-4"
                        >
                          <option value="">Select Categories</option>
                          {data &&
                            data.map((value) => {
                              console.log(value.cate_name);
                              return (
                                <option value={value.id}>
                                  {value.cate_name}
                                </option>
                              );
                            })}
                        </select>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <div className="form-group">
                        <select
                          onChange={onchagehandle}
                          // value={formvalue.service}
                          name="service"
                          className="form-control bg-transparent p-4"
                        >
                          <option value="">Select services</option>
                          {data1 &&
                            data1.map((value) => {
                              return (
                                <option value={value.service_name}>
                                  {value.service_name}
                                </option>
                              );
                            })}
                        </select>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <div className="form-group">
                        <div
                          className="date"
                          id="date"
                          onChange={onchagehandle}
                          value={formvalue.app_Date}
                          name="app_Date"
                          data-target-input="nearest"
                        >
                          <input
                            type="date"
                            onChange={onchagehandle}
                            value={formvalue.app_Date}
                            name="app_Date"
                            className="form-control bg-transparent p-4 datetimepicker-input"
                            placeholder="Select Date"
                          />
                        </div>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <button
                        className="btn btn-primary btn-block"
                        type="submit"
                        style={{ height: 47 }}
                      >
                        Make Appointment
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {/* Service End */}
        {/* Open Hours Start */}
        {/* <div className="container-fluid py-5">
                <div className="container py-5">
                    <div className="row">
                        <div className="col-lg-6" style={{ minHeight: 500 }}>
                            <div className="position-relative h-100">
                                <img className="position-absolute w-100 h-100" src="website/img/opening.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                        </div>
                        <div className="col-lg-6 pt-5 pb-lg-5">
                            <div className="hours-text bg-light p-4 p-lg-5 my-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                                <h1 className="mb-4">Best Relax And Spa Zone</h1>
                                <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                                <ul className="list-inline">
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Mon – Fri : 9:00 AM - 7:00 PM</li>
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Saturday : 9:00 AM - 6:00 PM</li>
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Sunday : Closed</li>
                                </ul>
                                <a href className="btn btn-primary mt-2">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> */}
        {/* Open Hours End */}
        {/* Pricing Start */}
        <div
          className="container-fluid bg-pricing"
          style={{ margin: "90px 0" }}
        >
          <div className="container">
            <div className="row">
              {/* <div className="col-lg-5" style={{ minHeight: 500 }}>
                            <div className="position-relative h-100">
                                <img className="position-absolute w-100 h-100" src="website/img/pricing.jpg" style={{ objectFit: 'cover' }} />
                            </div>
                        </div> */}
              {/* <div className="col-lg-7 pt-5 pb-lg-5">
                            <div className="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                                <div className="owl-carousel pricing-carousel">
                                    <div className="bg-white">
                                        <div className="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                            <h1 className="display-4 mb-0">
                                                <small className="align-top text-muted font-weight-medium" style={{ fontSize: 22, lineHeight: 45 }}>$</small>49<small className="align-bottom text-muted font-weight-medium" style={{ fontSize: 16, lineHeight: 40 }}>/Mo</small>
                                            </h1>
                                            <h5 className="text-primary text-uppercase m-0">Basic Plan</h5>
                                        </div>
                                        <div className="p-4">
                                            <p><i className="fa fa-check text-success mr-2" />Full Body Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Deep Tissue Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Hot Stone Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Tissue Body Polish</p>
                                            <p><i className="fa fa-check text-success mr-2" />Foot &amp; Nail Care</p>
                                            <a href className="btn btn-primary my-2">Order Now</a>
                                        </div>
                                    </div>
                                    <div className="bg-white">
                                        <div className="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                            <h1 className="display-4 mb-0">
                                                <small className="align-top text-muted font-weight-medium" style={{ fontSize: 22, lineHeight: 45 }}>$</small>99<small className="align-bottom text-muted font-weight-medium" style={{ fontSize: 16, lineHeight: 40 }}>/Mo</small>
                                            </h1>
                                            <h5 className="text-primary text-uppercase m-0">Family Plan</h5>
                                        </div>
                                        <div className="p-4">
                                            <p><i className="fa fa-check text-success mr-2" />Full Body Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Deep Tissue Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Hot Stone Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Tissue Body Polish</p>
                                            <p><i className="fa fa-check text-success mr-2" />Foot &amp; Nail Care</p>
                                            <a href className="btn btn-primary my-2">Order Now</a>
                                        </div>
                                    </div>
                                    <div className="bg-white">
                                        <div className="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                            <h1 className="display-4 mb-0">
                                                <small className="align-top text-muted font-weight-medium" style={{ fontSize: 22, lineHeight: 45 }}>$</small>149<small className="align-bottom text-muted font-weight-medium" style={{ fontSize: 16, lineHeight: 40 }}>/Mo</small>
                                            </h1>
                                            <h5 className="text-primary text-uppercase m-0">VIP Plan</h5>
                                        </div>
                                        <div className="p-4">
                                            <p><i className="fa fa-check text-success mr-2" />Full Body Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Deep Tissue Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Hot Stone Massage</p>
                                            <p><i className="fa fa-check text-success mr-2" />Tissue Body Polish</p>
                                            <p><i className="fa fa-check text-success mr-2" />Foot &amp; Nail Care</p>
                                            <a href className="btn btn-primary my-2">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> */}
              {/* <div className="col-lg-6 pt-5 pb-lg-5">
                            <div className="hours-text bg-light p-4 p-lg-5 my-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                                <h1 className="mb-4">Your Best Spa, Beauty & Skin Care Center Spa Zone</h1>
                                <p>Dolores lo Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                                <ul className="list-inline">
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Mon – Fri : 9:00 AM - 7:00 PM</li>
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Saturday : 9:00 AM - 6:00 PM</li>
                                    <li className="h6 py-1"><i className="far fa-circle text-primary mr-3" />Sunday : Closed</li>
                                </ul>
                                <a href className="btn btn-primary mt-2">Book Now</a>
                            </div>
                        </div> */}
            </div>
          </div>
        </div>
        {/* Pricing End */}
        {/* Team Start */}
        <div className="container-fluid py-5">
          <div className="container pt-5">
            <div className="row justify-content-center text-center">
              <div className="col-lg-6">
                <h6 className="d-inline-block bg-light text-primary text-uppercase py-1 px-2">
                  Spa Specialist
                </h6>
                <h1 className="mb-5">Spa &amp; Beauty Specialist</h1>
              </div>
            </div>
            <div className="row">
              <div className="col-lg-3 col-md-6">
                <div className="team position-relative overflow-hidden mb-5">
                  <img className="img-fluid" src="website/img/team-1.jpg" alt />
                  <div className="position-relative text-center">
                    <div className="team-text bg-primary text-white">
                      <h5 className="text-white text-uppercase">Olivia Mia</h5>
                      <p className="m-0">Spa &amp; Beauty Expert</p>
                    </div>
                    <div className="team-social bg-dark text-center">
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-twitter" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-facebook-f" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-linkedin-in" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square"
                        href="#"
                      >
                        <i className="fab fa-instagram" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="team position-relative overflow-hidden mb-5">
                  <img className="img-fluid" src="website/img/team-2.jpg" alt />
                  <div className="position-relative text-center">
                    <div className="team-text bg-primary text-white">
                      <h5 className="text-white text-uppercase">Cory Brown</h5>
                      <p className="m-0">Spa &amp; Beauty Expert</p>
                    </div>
                    <div className="team-social bg-dark text-center">
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-twitter" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-facebook-f" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-linkedin-in" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square"
                        href="#"
                      >
                        <i className="fab fa-instagram" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="team position-relative overflow-hidden mb-5">
                  <img className="img-fluid" src="website/img/team-3.jpg" alt />
                  <div className="position-relative text-center">
                    <div className="team-text bg-primary text-white">
                      <h5 className="text-white text-uppercase">
                        Elizabeth Ross
                      </h5>
                      <p className="m-0">Spa &amp; Beauty Expert</p>
                    </div>
                    <div className="team-social bg-dark text-center">
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-twitter" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-facebook-f" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-linkedin-in" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square"
                        href="#"
                      >
                        <i className="fab fa-instagram" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="team position-relative overflow-hidden mb-5">
                  <img className="img-fluid" src="website/img/team-4.jpg" alt />
                  <div className="position-relative text-center">
                    <div className="team-text bg-primary text-white">
                      <h5 className="text-white text-uppercase">Kelly Walke</h5>
                      <p className="m-0">Spa &amp; Beauty Expert</p>
                    </div>
                    <div className="team-social bg-dark text-center">
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-twitter" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-facebook-f" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square mr-2"
                        href="#"
                      >
                        <i className="fab fa-linkedin-in" />
                      </a>
                      <a
                        className="btn btn-outline-primary btn-square"
                        href="#"
                      >
                        <i className="fab fa-instagram" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Team End */}
        {/* Testimonial Start */}
        <div className="container-fluid py-5">
          <div className="container py-5">
            <div className="row align-items-center">
              <div className="col-lg-6 pb-5 pb-lg-0">
                <img
                  className="img-fluid w-100"
                  src="website/img/testimonial.jpg"
                  alt
                />
              </div>
              <div className="col-lg-6">
                <h6 className="d-inline-block text-primary text-uppercase bg-light py-1 px-2">
                  Testimonial
                </h6>
                <h1 className="mb-4">What Our Clients Say!</h1>
                <div className="owl-carousel testimonial-carousel">
                  <div className="position-relative">
                    <i
                      className="fa fa-3x fa-quote-right text-primary position-absolute"
                      style={{ top: "-6px", right: 0 }}
                    />
                    <div className="d-flex align-items-center mb-3">
                      <img
                        className="img-fluid rounded-circle"
                        src="website/img/testimonial-1.jpg"
                        style={{ width: 60, height: 60 }}
                        alt
                      />
                      <div className="ml-3">
                        <h6 className="text-uppercase">Client Name</h6>
                        <span>Profession</span>
                      </div>
                    </div>
                    <p className="m-0">
                      Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos
                      lorem nonumy. Tempor sea ipsum diam sed clita dolore eos
                      dolores magna erat dolore sed stet justo et dolor.
                    </p>
                  </div>
                  <div className="position-relative">
                    <i
                      className="fa fa-3x fa-quote-right text-primary position-absolute"
                      style={{ top: "-6px", right: 0 }}
                    />
                    <div className="d-flex align-items-center mb-3">
                      <img
                        className="img-fluid rounded-circle"
                        src="website/img/testimonial-2.jpg"
                        style={{ width: 60, height: 60 }}
                        alt
                      />
                      <div className="ml-3">
                        <h6 className="text-uppercase">Client Name</h6>
                        <span>Profession</span>
                      </div>
                    </div>
                    <p className="m-0">
                      Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos
                      lorem nonumy. Tempor sea ipsum diam sed clita dolore eos
                      dolores magna erat dolore sed stet justo et dolor.
                    </p>
                  </div>
                  <div className="position-relative">
                    <i
                      className="fa fa-3x fa-quote-right text-primary position-absolute"
                      style={{ top: "-6px", right: 0 }}
                    />
                    <div className="d-flex align-items-center mb-3">
                      <img
                        className="img-fluid rounded-circle"
                        src="website/img/testimonial-3.jpg"
                        style={{ width: 60, height: 60 }}
                        alt
                      />
                      <div className="ml-3">
                        <h6 className="text-uppercase">Client Name</h6>
                        <span>Profession</span>
                      </div>
                    </div>
                    <p className="m-0">
                      Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos
                      lorem nonumy. Tempor sea ipsum diam sed clita dolore eos
                      dolores magna erat dolore sed stet justo et dolor.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Testimonial End */}
        <Footer />
      </div>

      <a href="#" class="btn btn-lg btn-primary back-to-top">
        <i class="fa fa-angle-double-up"></i>
      </a>

      <Helmet>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/alldata/lib/easing/easing.min.js"></script>
        <script src="/alldata/lib/waypoints/waypoints.min.js"></script>
        <script src="/alldata/lib/counterup/counterup.min.js"></script>
        <script src="/alldata/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="/alldata/lib/tempusdominus/js/moment.min.js"></script>
        <script src="/alldata/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="/alldata/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <script src="/alldata/mail/jqBootstrapValidation.min.js"></script>
        <script src="/alldata/mail/contact.js"></script>

        <script src="/alldata/js/main.js"></script>
      </Helmet>
    </>
  );
}

export default Home;
