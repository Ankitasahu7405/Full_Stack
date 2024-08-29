import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';
import { toast } from 'react-toastify';

function Admin_profile() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get(`http://localhost:3000/Admin`)
    console.log(res.data);
    setData(res.data);
  }

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    img: ""
  });

  const editdata = async (id) => {
    const res = await axios.get(`http://localhost:3000/Admin/${id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  const changeHandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var ans = true;
    if (formvalue.cate_name == "") {
      toast.error('Admin Name Field is required');
      ans = false;
      return false;
    }
    if (formvalue.cate_image == "") {
      toast.error('Admin Image Field is required');
      ans = false;
      return false;
    }

    return ans;
  }

  const submitHandel = async (e) => {
    e.preventDefault();
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/Admin/${formvalue.id}`, formvalue);
      console.log(res);
      if (res.status == 200) {
        toast.success('Data Updated Successfully');
        setFormvalue({ ...formvalue, id: "", name: "", email: "", img: "" });
        fetch();
      }
    }
  }

  return (
    <div>
      <div className='cbp-spmenu-push'>
        <div class="main-content">
          <Aheader />
          <div id="page-wrapper">
            <div className="main-page">
              <div className="tables">
                <h2 className="title1">Profile</h2>
                <div className="panel-body widget-shadow">
                  <div className="bs-example widget-shadow" data-example-id="contextual-table">
                    <h4>My Account </h4>
                    <section className="bg-light">
                      <div className="container">
                        <div className="row">
                          <div className="col-lg-12 mb-4 mb-sm-5">
                            <div className="card card-style1 border-0">
                              <div className="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                <div className="row align-items-center">
                                  <div className="col-lg-6 mb-4 mb-lg-0">
                                    <img src={data.img} alt="..." />
                                  </div>
                                  <div className="col-lg-6 px-xl-10">
                                    <div className="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                      <h3 className="h2 text-white mb-0">Hi... {data.name}</h3>
                                    </div>
                                    <ul className="list-unstyled mb-1-9">
                                      <li className="mb-2 mb-xl-3 display-28"><span className="display-26 text-secondary me-2 font-weight-600">Email:</span> {data.email}</li>
                                      <li className="display-28"><span className="display-26 text-secondary me-2 font-weight-600">ID:</span> {data.id}</li>
                                    </ul>
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
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <Afooter />
        </div>
      </div>
    </div>
  )
}

export default Admin_profile