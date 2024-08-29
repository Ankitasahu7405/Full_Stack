import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';
import { toast } from 'react-toastify';
import { Helmet } from 'react-helmet';

function Manage_cate() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get(`http://localhost:3000/Category`)
    // console.log(res.data);
    setData(res.data);
  }

  const deleteHandel = async (cate_id) => {
    const res = await axios.delete(`http://localhost:3000/Category/${cate_id}`);
    console.log(res.data);
    toast.success('Data Deleted Successfully');
    fetch();
  }

  const [formvalue, setFormvalue] = useState({
    cate_id: "",
    cate_name: "",
    cate_image: ""
  });

  const editdata = async (cate_id) => {
    const res = await axios.get(`http://localhost:3000/Category/${cate_id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  const onChangehandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var ans = true;
    if (formvalue.cate_name == "") {
      toast.error('Categories Name Field is required');
      ans = false;
      return false;
    }
    if (formvalue.cate_image == "") {
      toast.error('Categories Image Field is required');
      ans = false;
      return false;
    }

    return ans;
  }

  const submitHandel = async (e) => {
    e.preventDefault();
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/Category/${formvalue.cate_id}`, formvalue);
      console.log(res);
      if (res.status == 200) {
        toast.success('Data Updated Successfully');
        setFormvalue({ ...formvalue, cate_id: "", cate_name: "", cate_image: "" });
        fetch();
      }
    }
  }

  const statusHandel = async (cate_id) => {
    const res = await axios.get(`http://localhost:3000/Category/${cate_id}`);
    if (res.data.status == "Stock") {
      const res1 = await axios.patch(`http://localhost:3000/Category/${cate_id}`, { status: "Available" });
      if (res1.status == 200) {
        console.log(res.data);
        toast.success('Available');
        fetch();
      }
    }
    else {
      const res1 = await axios.patch(`http://localhost:3000/Category/${cate_id}`, { status: "Stock" });
      if (res1.status == 200) {
        localStorage.removeItem('uid');
        localStorage.removeItem('uname');
        console.log(res.data);
        toast.success('Not Available');
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
                    <h4>Manage Category :</h4>
                    <table className="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Category Name</th>
                          <th>Category Image</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {
                          data && data.map((value, index) => {
                            return (
                              <tr key={index}>
                                <td>{value.id}</td>
                                <td>{value.cate_name}</td>
                                <td><img src={value.cate_image} alt="" height={80}/></td>
                                <td>{value.description}</td>
                                <td>{value.price}</td>
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
                            <h4 className="modal-title">Edit Category</h4>
                            <button type="button" className="btn-close" data-dismiss="modal" />
                          </div>
                          {/* Modal body */}
                          <div className="modal-body">
                            <form role="form" action="" method='post'>
                              <div className="form-group">
                                <label>Categories Name</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.cate_name} name="cate_name" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Description</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.description} name="description" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Categories Image</label>
                                <input type="url" onChange={onChangehandel} value={formvalue.cate_image} name="cate_image" className="form-control" />
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

export default Manage_cate