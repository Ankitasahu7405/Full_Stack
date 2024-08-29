import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios'

function Manage_blog() {

    useEffect(()=>{
        fetch();
    },[])

    const [data , setData] = useState()
    const fetch = async()=>{
        const res = await axios.get(`http://localhost:3000/blog`)
        console.log(res)
        setData(res.data);
    }
    const deletehand = async(id)=>{
        const res = await axios.delete(`http://localhost:3000/blog/${id}`)
        console.log(res.data)
        fetch();
        // toast.success('delete data success');
        alert('delete data success')
    }
    return (
        <div>
            <AHeader title="Manage Blog"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">

                        <div className=" col-lg-12 ">
                            <div className="bg-light  p-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Blog</h6>
                                <h1 className="mb-4">Manage Blog</h1>
                                <div id="success" />

                                <table className="table">
                                    <thead className="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Blog Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      {
                                        data && data.map((value , index)=>{
                                            return(
                                                <tr>
                                                <td>{value.id}</td>
                                                <td>{value.title}</td>
                                                <td>{value.description}</td>
                                                <td>
                                                    <img src={value.blog_img}
                                                    style={{height : "100px", width : "100px" ,  borderRadius: "50%" }}
                                                    alt="" />
                                                </td>
                                                <td>
                                                    <button className='btn btn-info mr-2'>Edit</button>
                                                    <button className='btn btn-danger' onClick={()=> deletehand(value.id)}>Delete</button>
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
            </div >

            <AFooter />
        </div>
    )
}

export default Manage_blog