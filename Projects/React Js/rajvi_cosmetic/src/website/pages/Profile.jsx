import React ,{ useEffect , useState} from "react";
// import Header from "../components/Header";
// import { Axios } from "axios";
// import Footer from "../components/Footer";
import {useNavigate } from 'react-router-dom';

import axios from "axios";
import { Helmet } from "react-helmet";
import Header1 from "../component/Header1";
import Header2 from "../component/Header2";

function Profile() {
    const redirect=useNavigate();
   
      useEffect(()=>{
        if(!(localStorage.getItem('userid')))
        {
             redirect('/')
        }
        else{

            fetch();
        }
      },[])
      const [data , setData] = useState({})
      const fetch = async()=>{
        const result = await axios.get(`http://localhost:3000/user/${localStorage.getItem('userid')}`)
        console.log(result.data)
        setData(result.data)

      }
      // const redirect=useNavigate();
   
      // useEffect(()=>{
      //   if(!(localStorage.getItem('userid')))
      //   {
      //        redirect('/')
      //   }
      //   else{

      //       fetch();
          
      //   }
      // },[])
      // const [data1 , setData1] = useState({})
      // const result1 =  axios.get(`http://localhost:3000/user/${localStorage.getItem('userid')}`)
      // console.log(result1.data)
      // setData1(result1.data)

      const [appointment , setAppointment] = useState()
      const handleappointment= async()=>{
        const res = await axios.get(`http://localhost:3000/appointment/?userid=${localStorage.getItem('userid')}`)
        setAppointment(res.data)
      }
      useEffect(()=>{
        handleappointment()
      },[])
  return (
    <>
    <Helmet>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </Helmet>
    <Header2 title='Profile' />
     <div className="container">
  <div className="main-body">
    {/* Breadcrumb */}
    {/* /Breadcrumb */}
    <div className="row gutters-sm">
      <div className="col-md-4 mb-3">
        <div className="card">
          <div className="card-body">
            <div className="d-flex flex-column align-items-center text-center">
              <img src={data.img} alt="Admin" className="rounded-circle"
              width={150} />
              <div className="mt-3">
                <h4>{data.name}</h4>
                <p className="text-secondary mb-1">Facial Therapy</p>
                <p className="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                <button className="btn btn-primary">Follow</button>
                <button className="btn btn-outline-primary">Message</button>
              </div>
            </div>
          </div>
        </div>  
        <div className="card mt-3">
          <ul className="list-group list-group-flush">
            <li className="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 className="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width={24} height={24} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" className="feather feather-globe mr-2 icon-inline"><circle cx={12} cy={12} r={10} /><line x1={2} y1={12} x2={22} y2={12} /><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" /></svg>Website</h6>
              <span className="text-secondary">https://bootdey.com</span>
            </li>
            <li className="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 className="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width={24} height={24} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" className="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" /></svg>Github</h6>
              <span className="text-secondary">bootdey</span>
            </li>
            <li className="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 className="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width={24} height={24} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" className="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>Twitter</h6>
              <span className="text-secondary">@bootdey</span>
            </li>
            <li className="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 className="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width={24} height={24} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" className="feather feather-instagram mr-2 icon-inline text-danger"><rect x={2} y={2} width={20} height={20} rx={5} ry={5} /><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" /><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg>Instagram</h6>
              <span className="text-secondary">bootdey</span>
            </li>
            <li className="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 className="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width={24} height={24} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" className="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>Facebook</h6>
              <span className="text-secondary">bootdey</span>
            </li>
          </ul>
        </div>
      </div>
      <div className="col-md-8">
        <div className="card mb-3">
          <div className="card-body">
            <div className="row">
              <div className="col-sm-3">
                <h6 className="mb-0">Full Name</h6>
              </div>
              <div className="col-sm-9 text-secondary">
               {data.name}
              </div>
            </div>
            <hr />
            <div className="row">
              <div className="col-sm-3">
                <h6 className="mb-0">Email</h6>
              </div>
              <div className="col-sm-9 text-secondary">
               {data.email}
              </div>
            </div>
            <hr />
            <div className="row">
              <div className="col-sm-3">
                <h6 className="mb-0">Phone</h6>
              </div>
              <div className="col-sm-9 text-secondary">
              {data.mobile}
              </div>
            </div>
            <hr />
            <div className="row">
              <div className="col-sm-3">
                <h6 className="mb-0">Mobile</h6>
              </div>
              <div className="col-sm-9 text-secondary">
              {data.mobile}

              </div>
            </div>
            <hr />
            <div className="row">
              <div className="col-sm-3">
                <h6 className="mb-0">Address</h6>
              </div>
              <div className="col-sm-9 text-secondary">
                Bay Area, San Francisco, CA
              </div>
            </div>
            <hr />
            <div className="row">
              <div className="col-sm-12">
                <a className="btn btn-info " onClick={() => redirect('/edit_profile/' + data.id )}   >Edit</a>
              </div>
            </div>
          </div>
        </div>
        <div className="row gutters-sm">
          <div className="col-sm-6 mb-3">
            <div className="card h-100">
              <div className="card-body">
                <h6 className="d-flex align-items-center mb-3"><i className="material-icons text-info mr-2">assignment</i>Project Status</h6>
                <small>Facial Therapy</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '80%'}} aria-valuenow={80} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Face Masking</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '72%'}} aria-valuenow={72} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Stone Therapy</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '89%'}} aria-valuenow={89} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Body Massage</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '55%'}} aria-valuenow={55} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Skin Care</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '66%'}} aria-valuenow={66} aria-valuemin={0} aria-valuemax={100} />
                </div>
              </div>
            </div>
     
          </div>
          <div className="d-flex flex-wrap">

     
     {
       appointment && appointment.map((value , index)=>{
         return(

          <div className="container mt-3 ">
          <div className="card" style={{width: 400}}>
          <div className="card-body">
            <h3 >{index+1}</h3>
            <h4 className="card-title">{value.service}</h4>
            <p className="card-text">{value.app_Date}</p>
            <a href="#" className="btn btn-primary">Appointment</a>
          </div>
        </div>
      </div>
         )
       })
     }
          </div>
   
 

          {/* <div className="col-sm-6 mb-3">
            <div className="card h-100">
              <div className="card-body">
                <h6 className="d-flex align-items-center mb-3"><i className="material-icons text-info mr-2">assignment</i>Project Status</h6>
                <small>Web Design</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '80%'}} aria-valuenow={80} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Website Markup</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '72%'}} aria-valuenow={72} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>One Page</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '89%'}} aria-valuenow={89} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Mobile Template</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '55%'}} aria-valuenow={55} aria-valuemin={0} aria-valuemax={100} />
                </div>
                <small>Backend API</small>
                <div className="progress mb-3" style={{height: 5}}>
                  <div className="progress-bar bg-primary" role="progressbar" style={{width: '66%'}} aria-valuenow={66} aria-valuemin={0} aria-valuemax={100} />
                </div>
              </div>
            </div>
          </div> */}
        </div>
      </div>
    </div>
  </div>
</div>

    </>
  );
}

export default Profile;
