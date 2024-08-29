import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios'
import { toast } from 'react-toastify'

function Manage_customer() {
    useEffect(()=>{
        fetch()
    },[])

    const [data , setData ] = useState()
 const fetch = async ()=>{
    const res = await axios.get(`http://localhost:3000/user`)
    console.log(res.data);
    setData(res.data)
}
const deletehandle = async (id)=>{
    const res = await axios.delete(`http://localhost:3000/user/${id}`)
    console.log(res.data);
    // setData(res.data)
    fetch()
}


const statushand = async (id) => {
    const res = await axios.get(`http://localhost:3000/user/${id}`);
    if(res.data.status=="Block")
    {
      const res1 = await axios.patch(`http://localhost:3000/user/${id}` , {status : "Unblock"});
     if(res1.status == 200)
     {
    //   localStorage.setItem('userid', res.data[0].id)
    //   localStorage.setItem('userName', res.data[0].name)
      console.log(res1.data);
      fetch();
      toast.success('Unblock success')
     }
    }
    else{
      const res1 = await axios.patch(`http://localhost:3000/user/${id}` , {status : "Block"});
      if(res1.status == 200)
      {
       console.log(res1.data);
       fetch();
       toast.success('Block success')
      }
    }
   
    
    
  };
return (
        <div>
            <AHeader title="Manage Customer"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">

                        <div className=" col-lg-12 ">
                            <div className="bg-light  p-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Customer</h6>
                                <h1 className="mb-4">Manage Customer</h1>
                                <div id="success" />

                                <table className="table">
                                    <thead className="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Image</th>
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
                                                <td>{value.mobile}</td>
                                                <td>
                                                    <img src={value.img}
                                                    height={100}
                                                    width={100}
                                                    alt="" />
                                                </td>
                                              
                                                <td>
                                                    <button className='btn btn-info mr-2' onClick={()=> statushand(value.id)}>   {value.status}</button>
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

export default Manage_customer