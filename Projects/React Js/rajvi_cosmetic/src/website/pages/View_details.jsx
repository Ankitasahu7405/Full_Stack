import React, { useEffect, useState } from 'react'
import Footer from '../component/Footer'
import Header2 from '../component/Header2'
import { Helmet } from 'react-helmet'
import { Link, useParams } from 'react-router-dom'
import axios from 'axios'

function View_details() {
    useEffect(()=>{
        fetch()
    } , [])
    const {id} = useParams()
    const [data , setData] = useState()
    const  fetch = async()=>{
        const res = await axios.get(`http://localhost:3000/services/?id=${id}`)
        console.log(data);
        setData(res.data[0])
      
// setTimeout(() => {
// }, 2000);      
    }


//     if (!data) {
//         return <center style={{marginTop : "50vh"}}><div class="spinner-grow text-primary" role="status">
//         <span class="sr-only">Loading...</span>
//       </div>
//       <div class="spinner-grow text-secondary" role="status">
//   <span class="sr-only">Loading...</span>
// </div>
//       </center>
//     }
  
    return (
        <>
        <Helmet>
        <link href="/alldata/img/favicon.ico" rel="icon" />

<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

<link href="/alldata/lib/animate/animate.min.css" rel="stylesheet" />
<link href="/alldata/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="/alldata/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<link href="/alldata/css/style.css" rel="stylesheet" />
        </Helmet>
            <Header2 title="View Product" />
            <div>
                
                {/* Pricing End */}
                {/* Open Hours Start */}
                {( data !== undefined) ?  (
                <div className="container-fluid py-5">
                    <div className="container py-5">
                        <div className="row">
                            <div className="col-lg-6" style={{ minHeight: 500 }}>
                                <div className="position-relative h-100">
                                    <img className="position-absolute w-100 h-100" src={data.ser_img} style={{ objectFit: 'cover' }} />
                                </div>
                            </div>
                            <div className="col-lg-6 pt-5 pb-lg-5">
                                <div className="hours-text bg-light p-4 p-lg-5 my-lg-5">
                                    <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                                    <h1 className="mb-4">{data.service_name}</h1>
                                    <p>{data.desc}</p>
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
                </div>
                 ) : <center><img src={`https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif?20170503175831`} /></center>  }
               
                {/* Open Hours End */}

                <div className="container-fluid py-5">
                    <div className="container py-5">
                        <div className="row">
                            <div className="col-lg-5" style={{ minHeight: 500 }}>
                                <div className="position-relative h-100">
                                    <Link to="/details">
                                    <img className="position-absolute w-100 h-100" src="/alldata/img/pricing.jpg" style={{ objectFit: 'cover' }} />

                                    </Link>
                                </div>
                            </div>
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
                              <div className="col-lg-6">
                            <h6 className="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                            <h1 className="mb-4">Your Best Spa, Beauty &amp; Skin Care Center</h1>
                            <p className="pl-4 border-left border-primary">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd erat duo eos et erat</p>
                            <div className="row pt-3">
                                <div className="col-6">
                                    <div className="bg-light text-center p-4">
                                        <h3 className="display-4 text-primary" data-toggle="counter-up">99</h3>
                                        <h6 className="text-uppercase">Spa Specialist</h6>
                                    </div>
                                </div>
                                <div className="col-6">
                                    <div className="bg-light text-center p-4">
                                        <h3 className="display-4 text-primary" data-toggle="counter-up">999</h3>
                                        <h6 className="text-uppercase">Happy Clients</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <Footer />
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
    )
}

export default View_details