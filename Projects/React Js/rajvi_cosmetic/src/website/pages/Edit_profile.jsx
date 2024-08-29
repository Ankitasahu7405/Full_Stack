import axios from "axios";
import React, { useEffect, useState } from "react";
import { useNavigate, useParams } from "react-router-dom";
import { toast } from "react-toastify";

function Edit_profile() {
  const redirect = useNavigate();
  useEffect(() => {
    if (localStorage.getItem("userid")) {
      edithandle();
    } else {
      redirect("/");
    }
  }, []);

  const [formvalue, setFormvalue] = useState({
    id: "",
    name: "",
    email: "",
    password: "",
    mobile: "",
    img: "",
  });
  const { id } = useParams();
  const edithandle = async () => {
    const res = await axios.get(`http://localhost:3000/user/${id}`);
    console.log(res.data);
    setFormvalue(res.data);
  };

  const onchangehandle = (e) => {
    setFormvalue({
      ...formvalue,
      id: new Date().getTime().toString(),
      status: "Unblock",
      [e.target.name]: e.target.value,
    });
    console.log(formvalue);
  };

  function validation() {
    var ans = true;
    if (formvalue.name == "") {
      toast.error("name Field is required");
      ans = false;
      return false;
    }
    if (formvalue.img == "") {
      toast.error(" img Field is required");
      ans = false;
      return false;
    }
    if (formvalue.email == "") {
        toast.error(" email Field is required");
        ans = false;
        return false;
      }
      if (formvalue.mobile == "") {
        toast.error(" mobile Field is required");
        ans = false;
        return false;
      }
   
    return ans;
  }
  
  const onsubmithandle = async (i) => {
    i.preventDefault();
    if(validation()){
    const res = await axios.patch(
      `http://localhost:3000/user/${id}`,
      formvalue
    );
    console.log(res);
    if (res.status == 200) {
      setFormvalue({
        ...formvalue,
        id: "",
        name: "",
        email: "",
        password: "",
        mobile: "",
        img: "",
      });
      redirect("/profile");
      toast.success("data update success");
    }
}
  };

  return (
    <>
      <div className="container mt-5 pt-5">
        <form onSubmit={onsubmithandle} method="post" role="form">
          <div className="mb-3">
            <label htmlFor="exampleInputEmail1" className="form-label">
              Email address
            </label>
            <input
              type="email"
              onChange={onchangehandle}
              name="email"
              value={formvalue.email}
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            
            <div id="emailHelp" className="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>

          <div className="mb-3">
            <label htmlFor="exampleInputEmail1" className="form-label">
             Name
            </label>
            <input
              type="text"
              onChange={onchangehandle}
              name="name"
              value={formvalue.name}
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            
          </div>
          <div className="mb-3">
            <label htmlFor="exampleInputEmail1" className="form-label">
             Mobile No.
            </label>
            <input
              type="text"
              onChange={onchangehandle}
              name="mobile"
              value={formvalue.mobile}
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            
          </div>
          <div className="mb-3">
            <label htmlFor="exampleInputEmail1" className="form-label">
            Image
            </label>
            <input
              type="url"
              onChange={onchangehandle}
              name="img"
              value={formvalue.img}
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            
          </div>
          
          <div className="mb-3 form-check">
            <input
              type="checkbox"
              className="form-check-input"
              id="exampleCheck1"
            />
            <label className="form-check-label" htmlFor="exampleCheck1">
              Check me out
            </label>
          </div>
          <button type="submit" className="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    </>
  );
}

export default Edit_profile;
