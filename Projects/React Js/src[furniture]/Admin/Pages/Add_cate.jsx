import React, { useEffect ,useState } from 'react'
import axios from 'axios';
import { Link, useNavigate } from 'react-router-dom';
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import { toast } from 'react-toastify';

function Add_cate() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/Category`, );
    console.log(res.data);
    setData(res.data);
  }

  const redirect = useNavigate();

  useEffect(() => {
    if (localStorage.getItem('cate_id')) {
      return redirect('/')
    }
  }, []);

  const [formvalue, setFormvalue] = useState({
    cate_id: "",
    cate_name: "",
    cate_image: "",
    description: "",
    price: ""
  });
  const changeHandle = (e) => {
    setFormvalue({ ...formvalue, id: new Date().getTime().toString(), status: "Unblock", [e.target.name]: e.target.value });
    console.log(formvalue);
  }

  function validation() {
    var res = true;
    if (formvalue.cate_name == "") {
      toast.error("Name Field is required !");
      res = false;
      return false;
    }
    if (formvalue.cate_image == "") {
      toast.error("Add Image URL Field is required !");
      res = false;
      return false;
    }
    if (formvalue.description == "") {
      toast.error("Description Field is required !");
      res = false;
      return false;
    }
    if (formvalue.price == "") {
      toast.error("Price Field is required !");
      res = false;
      return false;
    }
    return res;
  }

  const submitHandle = async (e) => {
    e.preventDefault(); // not reload page
    if (validation()) {
      const res = await axios.post(`http://localhost:3000/Category`, formvalue);
      //console.log(res);
      setFormvalue({ ...formvalue, cate_id: "", cate_name: "", cate_image: "", description: "", price: "" });
      toast.success('Data Insert Success');
      return false;
    }
  }
  
  return (
    <div>
      <div className='cbp-spmenu-push'>
        <div class="main-content">
          <Aheader />
          <div id="page-wrapper">
            <div className="main-page">
              <div className="forms">
                <h2 className="title1">Forms</h2>
                <div className="form-grids row widget-shadow" data-example-id="basic-forms">
                  <div className="form-title">
                    <h4>Add Category :</h4>
                  </div>
                  <div className="form-body">
                    <form method="post" action="" onSubmit={submitHandle}>
                      <div className="form-group">
                        <label htmlFor="exampleInputEmail1" name="cate_name">Category Name</label>
                        <input type="text" className="form-control" value={formvalue.cate_name} onChange={changeHandle} name="cate_name" id="exampleInputEmail1" placeholder="Name" />
                      </div>
                      <div className="form-group">
                        <label htmlFor="exampleInputPassword1" name="cate_image">Category Image</label>
                        <input type="url" className="form-control" value={formvalue.cate_image} onChange={changeHandle} style={{ height: 50}} name="cate_image" id="exampleInputPassword1" placeholder="Image URL" />
                      </div>
                      <div className="form-group">
                        <label htmlFor="exampleInputPassword1" name="description">Description</label>
                        <input type="text" className="form-control" value={formvalue.description} onChange={changeHandle} name="description" id="exampleInputPassword1" placeholder="Description" />
                      </div>
                      <div className="form-group">
                        <label htmlFor="exampleInputEmail1" name="price">Price</label>
                        <input type="number" className="form-control" value={formvalue.price} onChange={changeHandle} name="price" placeholder="Price" />
                      </div>
                      <div className="checkbox">
                        <label> <input type="checkbox" /> Check me out </label>
                      </div> 
                      <button type="submit"  className="btn btn-default">Submit</button>
                    </form>
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

export default Add_cate