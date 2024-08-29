import React, { useEffect, useState } from 'react'
import Header from '../Component/Header'
import Footer from '../Component/Footer'
import axios from 'axios';
import { useNavigate } from 'react-router-dom';
import { toast } from 'react-toastify';

function Profile() {

  const redirect = useNavigate();
  useEffect(() => {
    if (localStorage.getItem('uid')) {
      fetch();
    }
    else {
      return redirect('/')
    }
  }, []);

  const [data, setData] = useState({});
  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/customer/${localStorage.getItem('uid')}`);
    console.log(res.data);
    setData(res.data);
  }

  //==================================================================

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    mobile: "",
    status: "",
    img: ""
  });

  const editdata = async (id) => {
    const res = await axios.get(`http://localhost:3000/customer/${id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  //========================================================================


  const changeHandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
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


    if (formvalue.mobile == "") {
      toast.error("Mobile Field is required !");
      res = false;
      return false;
    }
    if (formvalue.img == "") {
      toast.error("Add image URL Field is required !");
      res = false;
      return false;
    }
    return res;
  }


  const submitHandel = async (e) => {
    e.preventDefault(); // Not reload the  page
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/customer/${formvalue.id}`, formvalue);
      //console.log(res);
      setFormvalue({ ...formvalue, id: "", name: "", email: "", mobile: "", img: "" });
      toast.success('Update success');
      fetch();
      return false;
    }
  }

  return (
    <div>
      <Header title="My Account" />
      <div>
        {/* Page Header Start */}
        <div className="container-fluid bg-secondary py-5">
          <div className="container py-5">
            <div className="row align-items-center py-4">
              <div className="col-md-6 text-center text-md-left">
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">Profile</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Page Header Start */}
        {/* About Start */}
        <div className="container-fluid bg-light pt-4 pb-4">
          <div className="container">
            <div className="row">
              <div className="col-lg-5">
                <div className="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                  <img className="h-60" src={data.img} alt height={150} />
                  <h5 className="display-3 mb-3">My Account</h5>
                  <h1 className="m-0">Hi... {data.name}</h1>
                </div>
              </div>
              <div className="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <div className="row py-2">
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-living-room font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">ID :{data.id}</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-house font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Mobile :{data.mobile}</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-office font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Email :{data.email}</h5>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="d-flex align-items-center mb-4">
                      <h1 className="flaticon-stairs font-weight-normal text-primary m-0 mr-3" />
                      <h5 className="text-truncate m-0">Status :{data.status}</h5>
                    </div>
                  </div>
                </div>

                <a href="javascript:void(0)" onClick={() => editdata(data.id)} data-toggle="modal" data-target="#myModal" className="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"><b>Edit Profile</b></a>
                
                <div className="modal" id="myModal">
                  <div className="modal-dialog">
                    <div className="modal-content">
                      {/* Modal Header */}
                      <div className="modal-header">
                        <h4 className="modal-title">Edit Profile</h4>
                        <button type="button" className="close" data-dismiss="modal">×</button>
                      </div>
                      {/* Modal body */}
                      <div className="modal-body">
                        <form role="form" action="" method='post'>
                          <div className="form-group">
                            <label>Name</label>
                            <input type="text" onChange={changeHandel} value={formvalue.name} name="name" className="form-control" />
                          </div>
                          <div className="form-group">
                            <label>Email</label>
                            <input type="text" onChange={changeHandel} value={formvalue.email} name="email" className="form-control" />
                          </div>
                          <div className="form-group">
                            <label>Mobile</label>
                            <input type="text" onChange={changeHandel} value={formvalue.mobile} name="mobile" className="form-control" />
                          </div>
                          <div className="form-group">
                            <label>Image</label>
                            <input type="url" onChange={changeHandel} value={formvalue.img} name="img" className="form-control" />
                          </div>

                          <button type="submit" className="btn btn-info" onClick={submitHandel} data-dismiss="modal">Update</button>
                        </form>
                      </div>
                      {/* Modal footer */}
                      <div className="modal-footer">
                        <button type="button" className="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* About End */}
      </div>

      <Footer />
    </div>
  )
}

export default Profile