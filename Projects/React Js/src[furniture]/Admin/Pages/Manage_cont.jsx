import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';
import { toast } from 'react-toastify';

function Manage_cont() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get(`http://localhost:3000/contact`)
    // console.log(res.data);
    setData(res.data);
  }

  const deleteHandel = async (id) => {
    const res = await axios.delete(`http://localhost:3000/contact/${id}`);
    console.log(res.data);
    toast.success('Data Deleted Successfully');
    fetch();
  }

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    subject: "",
    comment: ""
  });

  const editdata = async (id) => {
    const res = await axios.get(`http://localhost:3000/contact/${id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  const onChangehandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation()
    {
        var res=true;
        if(formvalue.name=="")
        {
            toast.error("Name Field is required !");
            res=false;
            return false;
        }
        if(formvalue.email=="")
        {
            toast.error("Email Field is required !");
            res=false;
            return false;
        }
        if (formvalue.subject == "") {
          toast.error("subject Field is required !");
          res = false;
          return false;
        }
    
        if (formvalue.comment == "") {
          toast.error("comment Field is required !");
          res = false;
          return false;
        }
        return res;
    }

  const submitHandel = async (e) => {
    e.preventDefault();
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/contact/${formvalue.id}`, formvalue);
      console.log(res);
      if (res.status == 200) {
        toast.success('Data Updated Successfully');
        setFormvalue({ ...formvalue, id: "", name: "", email: "",subject:"",comment:"" });
        fetch();
      }
    }
  }

  const statusHandel = async (id) => {
    const res = await axios.get(`http://localhost:3000/contact/${id}`);
    if (res.data.status == "Block") {
      const res1 = await axios.patch(`http://localhost:3000/contact/${id}`, { status: "Unblock" });
      if (res1.status == 200) {
        console.log(res.data);
        toast.success('Unblock Success');
        fetch();
      }
    }
    else {
      const res1 = await axios.patch(`http://localhost:3000/contact/${id}`, { status: "Block" });
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
      <div className='cbp-spmenu-push'>
        <div class="main-content">
          <Aheader />
          <div id="page-wrapper">
            <div className="main-page">
              <div className="tables">
                <h2 className="title1">Tables</h2>
                <div className="panel-body widget-shadow">
                  <div className="bs-example widget-shadow" data-example-id="contextual-table">
                    <h4>Manage Contact :</h4>
                    <table className="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
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
                                <td>{value.subject}</td>
                                <td>{value.comment}</td>
                                <td>
                                  <button className="btn btn-primary" data-toggle="modal" data-target="#myModal" onClick={() => editdata(value.id)}>Edit</button>
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
                                <input type="text" onChange={onChangehandel} value={formvalue.subject} name="subject" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Image</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.comment} name="comment" className="form-control" />
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

export default Manage_cont