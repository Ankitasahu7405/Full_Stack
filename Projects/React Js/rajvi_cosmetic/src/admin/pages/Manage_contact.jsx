import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios';
import { toast } from 'react-toastify';

function Manage_contact() {
    useEffect(()=>{
        fetch();
    },[])

    const [data , setData] = useState()
    const fetch = async()=>{
        const res = await axios.get(`http://localhost:3000/contacts`)
        console.log(res)
        setData(res.data);
    }
    const deletehand = async(id)=>{
        const res = await axios.delete(`http://localhost:3000/contacts/${id}`)
        console.log(res.data)
        fetch();
        toast.success('delete data success');
        // alert('delete data success')
    }
    return (
        <div>
            <AHeader title="Manage Contact"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">
                        <div className=" col-lg-12 ">
                            <div className="bg-light  p-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                                <h1 className="mb-4">Manage Contact</h1>
                                <div id="success" />

                                <table className="table">
                                    <thead className="table-dark">
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       {
                                        data && data.map((value)=>{
                                            return(
                                                <tr>
                                                <td>{value.id}</td>
                                                <td>{value.name}</td>
                                                <td>{value.email}</td>
                                                <td>
                                                    <button className='btn btn-info mr-2' >Edit</button>
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

export default Manage_contact