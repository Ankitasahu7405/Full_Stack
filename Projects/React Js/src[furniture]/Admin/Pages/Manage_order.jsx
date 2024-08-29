import React, { useEffect, useState } from 'react'
import Aheader from '../Components/Aheader'
import Afooter from '../Components/Afooter'
import axios from 'axios';

function Manage_order() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch();
  }, []);

  const fetch = async (e) => {
    const res = await axios.get('http://localhost:3000/Category')
    // console.log(res.data);
    setData(res.data);
  }

  const deleteHandel = async (id) => {
    const res = await axios.delete(`http://localhost:3000/Category/${id}`);
    fetch();
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
                    <h4>Category Table:</h4>
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
                                <td><img src={value.cate_image} alt="" /></td>
                                <td>{value.description}</td>
                                <td>{value.price}</td>
                                <td>
                                  <button className="btn btn-primary">Edit</button>
                                  <button className="btn btn-danger" onClick={() => deleteHandel(value.id)}>Delete</button>
                                </td>
                              </tr>
                            )
                          })
                        }
                      </tbody>
                    </table>
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

export default Manage_order