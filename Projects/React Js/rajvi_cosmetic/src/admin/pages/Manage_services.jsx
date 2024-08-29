import React, { useEffect, useState } from "react";
import AHeader from "../component/AHeader";
import AFooter from "../component/AFooter";
import axios from "axios";
import { toast } from "react-toastify";

function Manage_services() {
  useEffect(() => {
    fetch();
  }, []);

  const [data, setData] = useState();
  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/services`);
    console.log(res.data);
    setData(res.data);
  };

  const deletehand = async (id) => {
    const res = await axios.delete(`http://localhost:3000/services/${id}`);
    console.log(res.data);
    fetch();
    toast.success("delete data success");
    // alert('delete data success')
  };

  const edithandle = async (id) => {
    const res = await axios.get(`http://localhost:3000/services/${id}`);
    console.log(res.data);
    setFormValue(res.data);
  };

  const [formValue, setFormValue] = useState({
    id: "",
    cate_id: "",
    service_name: "",
    desc: "",
    price: "",
    ser_img: " ",
  });

  const onChange = (event) => {
    setFormValue({ ...formValue, [event.target.name]: event.target.value });
    console.log(formValue);
  };

//   const validateForm = () => {
//     let result = true;
//     const { cate_name, cate_img } = formValue;
//     if (!cate_name || !cate_img);
//     {
//       toast.error("Please fill in all the required fields.");
//       // alert('Please fill in all the required fields')
//       // result = false;
//     }
//     return result;
//   };
  const onSubmit = async (event) => {
    console.log(formValue);
    event.preventDefault();
    // if (validateForm()) {
      try {
        const response = await axios.patch(
          `http://localhost:3000/services/${formValue.id}`,
          formValue
        );

        if (response.status == 200) {
          toast.success("Your product has been added successfully.");
          // alert('Your product has been added successfully')
          setFormValue({
            ...formValue,
            id: "",
            cate_id: "",
            service_name: "",
            desc: "",
            price: "",
            ser_img: " ",
          });
          fetch();
          // setFormValue({
          //   ...formValue,
          //   cate_name: "",
          //   Prod_Name: "",
          //   Prod_Description: "",
          //   Price: "",
          //   Image: "",
          // });
        } else {
          toast.warning("Failed to add the product.");
          // alert('Failed to add the product')
        }
      } catch (error) {
        // toast.error("An error occurred while adding the product.");
        // alert("An error occurred while adding the product");
        toast.error('An error occurred while adding the product')
        console.error(error);
      }
      return false;
    // }
  };
  return (
    <div>
      <AHeader title="Manage Services" />
      <div className="container-fluid">
        <div className="container">
          <div className="row">
            <div className=" col-lg-12 ">
              <div className="bg-light  p-lg-5">
                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">
                  Services
                </h6>
                <h1 className="mb-4">Manage Services</h1>
                <div id="success" />

                <table className="table">
                  <thead className="table-dark">
                    <tr>
                      <th>ID</th>
                      <th>Categories ID</th>
                      <th>Service Image</th>
                      <th>Service Name</th>
                      <th>Main Price</th>
                      <th>service description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {data &&
                      data.map((value) => {
                        return (
                          <tr>
                            <td>{value.id}</td>
                            <td>{value.cate_id}</td>
                            <td><img src={value.ser_img} 
                                             style={{height : "100px" , width :"100px" ,   borderRadius: "50%"}}
                            
                            alt="" /> </td>
                            <td>{value.service_name}</td>
                            <td>{value.price}</td>
                            <td>{value.desc}</td>
                            <td>
                              <button
                                className="btn btn-info mr-2"
                                data-toggle="modal"
                                data-target="#exampleModal"
                                onClick={() => edithandle(value.id)}
                              >
                              <i className="fas fa-pen-fancy" style={{fontSize: 20}} />

                              </button>
                              <button
                                className="btn btn-danger"
                                onClick={() => deletehand(value.id)}
                              >
                              <i className="fa fa-trash" />

                              </button>
                            </td>
                          </tr>
                        );
                      })}
                  </tbody>
                </table>
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          Edit categories
                        </h5>
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form role="form" method="post">
                          {/* <div className="form-group">
                      <label> Category Name </label>
                      <input
                        className="form-control"
                        type="text"
                        placeholder="Enter the Category Name here..."
                        name="cate_name"
                        onChange={onChange}
                      />
                    </div> */}

                          {/* <div className="form-group">
                      <label> Category Name </label>
                      <select
                        id=""
                        className="form-control"
                        name="cate_name"
                        onChange={onChange}
                       >
                        <option disabled selected>
                          {" "}
                          Select Category{" "}
                        </option>
                        <option value="Casual"> Casual Outfit </option>
                        <option value="Formal_outfit"> Formal Outfit </option>
                        <option value="Party_Outfit">
                          {" "}
                           Party Dress{" "}
                        </option>
                        <option value="cargo_pants">Cargo Outfit</option>
                        <option value="chambary">chambary</option>
                      </select>
                    </div> */}
                          <div className="form-group">
                            <label> Product Name </label>
                            <input
                              className="form-control"
                              type="text"
                              placeholder="Enter the Product Name here..."
                              name="service_name"
                              value={formValue.service_name}
                              onChange={onChange}
                            />
                          </div>
                          <div className="form-group">
                            <label> Product Description </label>
                            <input
                              className="form-control"
                              type="text"
                              placeholder="Enter the Product Description here..."
                              name="desc"
                              value={formValue.desc}
                              onChange={onChange}
                            />
                          </div>

                          <div className="form-group">
                            <label> Price</label>
                            <input
                              className="form-control"
                              type="number"
                              placeholder="Enter the Main Price of Product ( ₹ )"
                              name="price"
                              value={formValue.price}
                              onChange={onChange}
                            />
                          </div>

                          {/* <div className="form-group">
                      <label> Discounted Price</label>
                      <input
                        className="form-control"
                        type="number"
                        placeholder="Enter the Discounted Price of Product ( ₹ )"
                        name="discounted_Price"
                        onChange={onChange}
                      />
                    </div> */}

                          <div className="form-group">
                            <label> Product Image URL </label>
                            <input
                              className="form-control"
                              type="url"
                              placeholder="Enter the Product Image URL"
                              name="ser_img"
                              value={formValue.ser_img}
                              onChange={onChange}
                            />
                          </div>

                          <hr />
                          <div className="text-center">
                            {/* <button
                              type="submit"
                              className="btn btn-success"
                              onClick={onSubmit}
                            >
                              Add Product
                            </button> */}
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-dismiss="modal"
                        >
                          Close
                        </button>
                        <button
                          type="button"
                          class="btn btn-primary  "
                          data-dismiss="modal"
                          aria-label="Close"
                          onClick={onSubmit}
                        >
                          Save changes
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <AFooter />
    </div>
  );
}

export default Manage_services;
