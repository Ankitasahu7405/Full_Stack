import React, { useState, useEffect } from 'react'
import Header from '../Component/Header'
import Footer from '../Component/Footer'
import axios from 'axios';
import { useParams } from 'react-router-dom';


function View_service() {
  useEffect(() => {
    fetch();

  }, []);

  const { cate_id } = useParams();
  const [data, setData] = useState([]);
  const fetch = async () => {
    const res = await axios.get(`http://localhost:3000/Product?cate_id=${cate_id}`);
    console.log(res.data);
    setData(res.data);
  }

  return (
    <div>
      <Header />
      <div>
        {/* Page Header Start */}
        <div className="container-fluid bg-secondary py-5">
          <div className="container py-5">
            <div className="row align-items-center py-4">
              <div className="col-md-6 text-center text-md-left">
                <h1 className="mb-4 mb-md-0 text-primary text-uppercase">Our Product</h1>
              </div>
              <div className="col-md-6 text-center text-md-right">
                <div className="d-inline-flex align-items-center">
                  <a className="btn btn-outline-primary" href>Home</a>
                  <i className="fas fa-angle-double-right text-primary mx-2" />
                  <a className="btn btn-outline-primary disabled" href>Our Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* Page Header Start */}
        {/* Blog Start */}
        <div className="container-fluid bg-light pt-5">
          <div className="container py-5">
            <div className="row justify-content-center">
              <div className="col-lg-6 col-md-8 col text-center mb-4">
                <h6 className="text-primary font-weight-normal text-uppercase mb-3">Our Product</h6>
                <h1 className="mb-4">View Our All Products</h1>
              </div>
            </div>
            <div className="row pb-3">
              {
                data && data.map((value, index) => {
                  return (
                    <div className="col-md-4 mb-4">
                      <div className="card" style={{ width: '18rem' }}>
                        <img className="card-img-top" src={value.prod_image} height={150} width={100} alt="" />
                        <div className="card-body">
                          <h5 className="card-title">{value.prod_name}</h5>
                          <p className="card-text">{value.description}</p>
                          <p className="card-text">{value.price}</p>
                          <a href="#" className="btn btn-primary">Show More</a>
                        </div>
                      </div>
                    </div>
                  )
                })
              }

              <div className="col-md-12 mb-4">
                <nav aria-label="Page navigation">
                  <ul className="pagination justify-content-center mb-0">
                    <li className="page-item disabled">
                      <a className="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span className="sr-only">Previous</span>
                      </a>
                    </li>
                    <li className="page-item active"><a className="page-link" href="#">1</a></li>
                    <li className="page-item"><a className="page-link" href="#">2</a></li>
                    <li className="page-item"><a className="page-link" href="#">3</a></li>
                    <li className="page-item">
                      <a className="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span className="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        {/* Blog End */}
      </div>

      <Footer />
    </div>
  )
}

export default View_service