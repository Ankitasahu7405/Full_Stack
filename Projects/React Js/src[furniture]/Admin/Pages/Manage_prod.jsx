import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';
import { toast } from 'react-toastify';
import { Helmet } from 'react-helmet';

function Manage_prod() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get(`http://localhost:3000/Product`)
    // console.log(res.data);
    setData(res.data);
  }

  const deleteHandel = async (prod_id) => {
    const res = await axios.delete(`http://localhost:3000/Product/${prod_id}`);
    console.log(res.data);
    toast.success('Data Deleted Successfully');
    fetch();
  }

  const [formvalue, setFormvalue] = useState({
    prod_id: "",
    prod_name: "",
    prod_image: ""
  });

  const editdata = async (prod_id) => {
    const res = await axios.get(`http://localhost:3000/Product/${prod_id}`);
    console.log(res.data);
    setFormvalue(res.data);
  }

  const onChangehandel = (e) => {
    setFormvalue({ ...formvalue, [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var ans = true;
    if (formvalue.prod_name == "") {
      toast.error('Categories Name Field is required');
      ans = false;
      return false;
    }
    if (formvalue.prod_image == "") {
      toast.error('Categories Image Field is required');
      ans = false;
      return false;
    }

    return ans;
  }

  const submitHandel = async (e) => {
    e.preventDefault();
    if (validation()) {
      const res = await axios.patch(`http://localhost:3000/Product/${formvalue.prod_id}`, formvalue);
      console.log(res);
      if (res.status == 200) {
        toast.success('Data Updated Successfully');
        setFormvalue({ ...formvalue, prod_id: "", prod_name: "", prod_image: "" });
        fetch();
      }
    }
  }

  const statusHandel = async (prod_id) => {
    const res = await axios.get(`http://localhost:3000/Product/${prod_id}`);
    if (res.data.status == "Stock") {
      const res1 = await axios.patch(`http://localhost:3000/Product/${prod_id}`, { status: "Available" });
      if (res1.status == 200) {
        console.log(res.data);
        toast.success('Product Available');
        fetch();
      }
    }
    else {
      const res1 = await axios.patch(`http://localhost:3000/Product/${prod_id}`, { status: "Stock" });
      if (res1.status == 200) {
        localStorage.removeItem('uid');
        localStorage.removeItem('uname');
        console.log(res.data);
        toast.success('Product Out Of Stock');
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
                    <h4>Manage Product:</h4>
                    <table className="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Product Image</th>
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
                                <td>{value.prod_id}</td>
                                <td>{value.prod_name}</td>
                                <td><img src={value.prod_image} alt="" height={100} /></td>
                                <td>{value.description}</td>
                                <td>{value.price}</td>
                                <td>
                                  <button className="btn btn-primary" data-toggle="modal" data-target="#myModal" onClick={() => editdata(value.prod_id)}>Edit</button>
                                  <button className="btn btn-danger" onClick={() => deleteHandel(value.prod_id)}>Delete</button>
                                  <button className='btn btn-info' onClick={() => statusHandel(value.prod_id)} >{value.status}</button>
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
                            <h4 className="modal-title">Edit Product</h4>
                            <button type="button" className="btn-close" data-dismiss="modal" />
                          </div>
                          {/* Modal body */}
                          <div className="modal-body">
                            <form role="form" action="" method='post'>
                              <div className="form-group">
                                <label>Product Name</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.prod_name} name="prod_name" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Product Description</label>
                                <input type="text" onChange={onChangehandel} value={formvalue.description} name="description" className="form-control" />
                              </div>
                              <div className="form-group">
                                <label>Product Image</label>
                                <input type="url" onChange={onChangehandel} value={formvalue.prod_image} name="prod_image" className="form-control" />
                              </div>

                              <button type="submit" className="btn btn-default" onClick={submitHandel} data-dismiss="modal">Update</button>
                            </form>
                          </div>
                          {/* Modal footer */}
                          <div className="modal-footer">
                            <button type="button" className="btn btn-danger" data-dismiss="modal">Save</button>
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

export default Manage_prod