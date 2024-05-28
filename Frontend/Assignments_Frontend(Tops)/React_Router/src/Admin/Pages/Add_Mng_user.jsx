import React, { useEffect, useState } from 'react'
import axios from 'axios';
import { Link, useNavigate } from 'react-router-dom';
import { toast } from 'react-toastify';
import Header from '../Component/Header'
import Footer from '../Component/Footer'

function Add_Mng_user() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async () => {
    const res = await axios.get('http://localhost:3000/customer', );
    console.log(res.data);
    setData(res.data);
  }

  const redirect = useNavigate();

  useEffect(() => {
    if (localStorage.getItem('id')) {
      return redirect('/')
    }
  }, []);

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    password: "",
    mobile: "",
    image: ""
  });
  const changeHandel = (e) => {
    setFormvalue({ ...formvalue, id: new Date().getTime().toString(), status: "Unblock", [e.target.name]: e.target.value });
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
    if (formvalue.password == "") {
      toast.error("Password Field is required !");
      res = false;
      return false;
    }

    if (formvalue.mobile == "") {
      toast.error("Mobile Field is required !");
      res = false;
      return false;
    }
    if (formvalue.image == "") {
      toast.error("Add Image URL Field is required !");
      res = false;
      return false;
    }
    return res;
  }

  const submitHandel = async (e) => {
    e.preventDefault(); // not reload page
    if (validation()) {
      const res = await axios.post(`http://localhost:3000/customer`, formvalue);
      //console.log(res);
      setFormvalue({ ...formvalue, id: "", name: "", email: "", password: "", mobile: "", image: "" });
      toast.success('Data Insert Success');
      return false;
    }
  }

  return (
    <div>
      <Header />
      <div id="page-wrapper">
        <div id="page-inner">
          <div className="row">
            <div className="col-md-12">
              <h2>User Form</h2>
              <form action="/" method="post" onSubmit={submitHandel}>
                <div className="form-group">
                  <label htmlFor="email">Name :</label>
                  <input type="text" className="form-control" name='name' value={formvalue.name} onChange={changeHandel} placeholder="Enter name" id="name" />
                </div>
                <div className="form-group">
                  <label htmlFor="email">Email :</label>
                  <input type="email" className="form-control" name='email' value={formvalue.email} onChange={changeHandel} placeholder="Enter email"  />
                </div>
                <div className="form-group">
                  <label htmlFor="pwd">Password :</label>
                  <input type="password" className="form-control" name='password' value={formvalue.password} onChange={changeHandel} placeholder="Enter password"  />
                </div>
                <div className="form-group">
                  <label htmlFor="email">Mobile :</label>
                  <input type="number" className="form-control" name='mobile' value={formvalue.mobile} onChange={changeHandel} placeholder="Enter mobile"  />
                </div>
                <div className="form-group">
                  <label htmlFor="email">Image :</label>
                  <input type="url" className="form-control" name='image' value={formvalue.image} onChange={changeHandel} placeholder="Enter image Url"  />
                </div>
                <div className="form-group form-check">
                  <label className="form-check-label">
                    <input className="form-check-input" type="checkbox" /> Remember me
                  </label>
                </div>
                <button type="submit" className="btn btn-primary">Submit</button>
              </form>
              <br />
              <hr />
              <h2>User Table</h2>
              <table className="table table-hover">
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
                    data && data.map((value, index, arr) => {
                      return (
                        <tr>
                          <td>{value.id}</td>
                          <td>{value.name}</td>
                          <td>{value.email}</td>
                          <td>{value.mobile}</td>
                          <td>{value.image}</td>
                          <td>
                            <button className="btn btn-primary">Edit</button>
                            <button className="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                      )
                    })
                  }
                </tbody>
              </table>
            </div>
          </div>
          {/* /. ROW  */}
          <hr />
          {/* /. ROW  */}
        </div>
        {/* /. PAGE INNER  */}
      </div>
      {/* /. PAGE WRAPPER  */}
      <Footer />
    </div>

  )
}

export default Add_Mng_user