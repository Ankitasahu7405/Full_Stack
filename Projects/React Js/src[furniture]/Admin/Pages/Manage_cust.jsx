import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';
import { toast } from 'react-toastify';
import { Helmet } from 'react-helmet';

function Manage_cust() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get('http://localhost:3000/customer')
    // console.log(res.data);
    setData(res.data);
  }

  const deleteHandel = async (id) => {
    const res = await axios.delete(`http://localhost:3000/customer/${id}`);
    console.log(res.data);
    toast.success('Data Deleted Successfully');
    fetch();
  }

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    mobile: "",
    img: ""
  });

  const editdata = async (id) => {
    const res = await axios.get(`http://localhost:3000/customer/${id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  const onChangehandel = (e) => {
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
      toast.error("Add Image URL Field is required !");
      res = false;
      return false;
    }
    return res;
  }

  const submitHandel = async (e) => {
    e.preventDefault();
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/customer/${formvalue.id}`, formvalue);
      console.log(res);
      if (res.status == 200) {
        toast.success('Data Updated Successfully');
        setFormvalue({ ...formvalue, id: "", name: "", email: "", mobile: "", img: "" });
        fetch();
      }
    }
  }

  const statusHandel = async (id) => {
    const res = await axios.get(`http://localhost:3000/customer/${id}`);
    if (res.data.status == "Block") {
      const res1 = await axios.patch(`http://localhost:3000/customer/${id}`, { status: "Unblock" });
      if (res1.status == 200) {
        console.log(res.data);
        toast.success('Unblock Success');
        fetch();
      }
    }
    else {
      const res1 = await axios.patch(`http://localhost:3000/customer/${id}`, { status: "Block" });
      if (res1.status == 200) {
        localStorage.removeItem('uid');
        localStorage.removeItem('uname');
        console.log(res.data);
        toast.success('Block Success');
        fetch();
      }
    }
  }


  return (
    <div>
      <Helmet>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      </Helmet>
      <div className='cbp-spmenu-push'>
        <div class="main-content">
          <Aheader />
          <div id="page-wrapper">
            <div className="main-page">
              <div className="tables">
                <h2 className="title1">Tables</h2>
                <div className="panel-body widget-shadow">
                  <div className="bs-example widget-shadow" data-example-id="contextual-table">
                    <h4>Manage Customer :</h4>
                    <table className="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {
                          data && data.map((value, index) => {
                            return (
                              <tr key={index}>
                                <td>{value.id}</td>
                                <td>{value.name}</td>
                                <td>{value.email}</td>
                                <td>{value.mobile}</td>
                                <td><img src={value.img} alt="" width={'50px'} /></td>
                                <td>
                                  <button className="btn btn-success" data-toggle="modal" data-target="#myModal" onClick={() => editdata(value.id)}>Edit</button>
                                  <button className="btn btn-danger" onClick={() => deleteHandel(value.id)}>Delete</button>
                                  <button className='btn btn-info' onClick={() => statusHandel(value.id)} >{value.status}</button>
                                </td>
                              </tr>
                            )
                          })
                        }
                      </tbody>
                    </table>
                    <div className="modal" id="myModal">
                      <div className="modal-dialog">
                        <div className="modal-content">
                          {/* Modal Header */}
                          <div className="modal-header">
                            <h4 className="modal-title">Edit Customer</h4>
                            <button type="button" className="btn-close" data-dismiss="modal" />
                          </div>
                          {/* Modal body */}
                          <div className="modal-body">
                            <form role="form" action="" method='post'>
                              <div className="form-group">
                                <label>Name</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.name} name="name" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Email</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.email} name="email" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Mobile</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.mobile} name="mobile" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Image</label>
                                <input type="url" onChange={onChangehandel} value={formvalue.img} name="img" className="form-control" />
                              </div>

                              <button type="submit" className="btn btn-default" onClick={submitHandel} data-dismiss="modal">Update</button>
                            </form>
                          </div>
                          {/* Modal footer */}
                          <div className="modal-footer">
                            <button type="button" className="btn btn-danger" data-bs-dismiss="modal">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
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

export default Manage_cust