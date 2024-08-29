import React, { useEffect, useState } from "react";
import AHeader from "../component/AHeader";
import AFooter from "../component/AFooter";
import axios from "axios";
import { toast } from "react-toastify";

function Add_services() {
  useEffect(() => {
    fetch();
  }, []);
  const [data, setData] = useState([]);
  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/categories`);
    console.log(res.data);
    setData(res.data);
  };

  const [formvalue, setFormvalue] = useState({
    id: "",
    cate_id: "",
    service_name: "",
    desc: "",
    price: "",
    ser_img: " ",
  });

  const onchagehandle = (e) => {
    setFormvalue({
      ...formvalue,
      id: new Date().getTime().toString(),
      [e.target.name]: e.target.value,
    });
    console.log(formvalue);
  };

  
function validation() {
  var ans = true;
  if (formvalue.service_name == "") {
    toast.error("service_name Field is required");
    ans = false;
    return false;
  }
  if (formvalue.desc == "") {
    toast.error(" description Field is required");
    ans = false;
    return false;
  }
  if (formvalue.price == "") {
    toast.error("price is required");
    ans = false;
    return false;
  }
  if (formvalue.ser_img == "") {
    toast.error("ser_img is required");
    ans = false;
    return false;
  }
  return ans;
}

  const submithandle = async (i) => {
    i.preventDefault();
    if(validation()){
    const res = await axios.post(`http://localhost:3000/services`, formvalue);
    console.log(res);
    if (res.status == 201) {
      // alert("data success");
      toast.success('data success')
      setFormvalue({
        ...formvalue,
        id: "",
        cate_id: "",
        service_name: "",
        desc: "",
        price: "",
        ser_img: " ",
      });
    }
  }
  };
  return (
    <div>
      <AHeader title="Add Services" />
      <div className="container-fluid">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div className="bg-light  p-lg-5 ">
                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">
                  Services
                </h6>
                <h1 className="mb-4">Add Services</h1>
                <div id="success" />
                <form
                  onSubmit={submithandle}
                  action=""
                  role="form"
                  method="post"
                  name="sentMessage"
                  id="contactForm"
                  noValidate="novalidate"
                >
                  <div className="form-row">
                    <div className="col-sm-12 control-group">
                      <select
                        onChange={onchagehandle}
                        value={formvalue.cate_id}
                        name="cate_id"
                        className="form-control"
                      >
                        <option value="">Select Categories</option>
                        {data &&
                          data.map((value) => {
                            return (
                              <option value={value.id}>{value.cate_name}</option>
                            );
                          })}
                      </select>
                      <p className="help-block text-danger" />
                    </div>
                    <div className="col-sm-12 control-group">
                      <input
                        type="text"
                        onChange={onchagehandle}
                        name="service_name"
                        value={formvalue.service_name}
                        className="form-control border-0 p-4"
                        placeholder="Services Name"
                        required="required"
                        data-validation-required-message="Please enter Service name"
                      />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="col-sm-12 control-group">
                      <input
                        type="url"
                        onChange={onchagehandle}
                        name="ser_img"
                        value={formvalue.ser_img}
                        className="form-control border-0 p-4"
                        placeholder="Service Image"
                        required="required"
                        data-validation-required-message="Please Enter Service Image"
                      />
                      <p className="help-block text-danger" />
                    </div>
                    <div className="col-sm-12 control-group">
                      <input
                        type="number"
                        onChange={onchagehandle}
                        name="price"
                        value={formvalue.price}
                        className="form-control border-0 p-4"
                        placeholder="Main Price"
                        required="required"
                        data-validation-required-message="Please Main Price"
                      />
                      <p className="help-block text-danger" />
                    </div>
                    {/* <div className="col-sm-12 control-group">
                                            <input type="number" className="form-control border-0 p-4" name="dis_price" placeholder="Discounted Price" required="required" data-validation-required-message="Please Discounted Price" />
                                            <p className="help-block text-danger" />
                                        </div> */}
                  </div>

                  <div className="control-group">
                    <textarea
                      onChange={onchagehandle}
                      name="desc"
                      value={formvalue.desc}
                      className="form-control border-0 py-3 px-4"
                      rows={3}
                      id="message"
                      placeholder="Service Description"
                      required="required"
                      data-validation-required-message="Please enter Service Description"
                      defaultValue={""}
                    />
                    <p className="help-block text-danger" />
                  </div>
                  <div>
                    <button
                      className="btn btn-primary py-3 px-4"
                      type="submit"
                      id="sendMessageButton"
                    >
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <AFooter />
    </div>
  );
}

export default Add_services;
