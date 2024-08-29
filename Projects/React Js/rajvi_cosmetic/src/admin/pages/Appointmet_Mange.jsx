import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios'
import { toast } from 'react-toastify'

function Appointmet_Mange() {
    useEffect(()=>{
        fetch()
    },[])

    const [data , setData ] = useState()
 const fetch = async ()=>{
    const res = await axios.get(`http://localhost:3000/appointment`)
    console.log(res.data);
    setData(res.data)
 }
 const deletehandle = async (id)=>{
    const res = await axios.delete(`http://localhost:3000/appointment/${id}`)
    console.log(res.data);
    // setData(res.data)
    fetch();
    // alert('delete success ')
    toast.success('delete Appointment')
 }
    return (
        <div>
            <AHeader title="Manage Appointment"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">

                        <div className=" col-lg-12 ">
                            <div className="bg-light  p-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Customer</h6>
                                <h1 className="mb-4">Manage Appointment</h1>
                                <div id="success" />

                                <table className="table">
                                    <thead className="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>App_Name</th>
                                            <th>App_Email</th>
                                            <th>App_Time</th>
                                            <th>App_Date</th>
                                            <th>service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       {
                                        data && data.map((value, index)=>{
                                            return(
                                                <tr>
                                                <td>{value.id}</td>
                                                <td>{value.app_name}</td>
                                                <td>{value.app_email}</td>
                                                <td>{value.app_Time}</td>
                                                <td>{value.app_Date}</td>
                                                <td>{value.service}</td>

                                                {/* <td>
                                                    <img src={value.img}
                                                    height={100}
                                                    width={100}
                                                    alt="" />
                                                </td> */}
                                              
                                                <td>
                                                    <button className='btn btn-info mr-2'>Edit</button>
                                                    <button className='btn btn-danger' onClick={()=> deletehandle(value.id)}>Delete</button>
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

export default Appointmet_Mange