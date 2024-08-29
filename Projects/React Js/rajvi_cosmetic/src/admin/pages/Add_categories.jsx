import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios'
import { toast } from 'react-toastify'

function Add_categories() {

    useEffect(()=>{
        fetch()
    }, [])
   const [data , setData ] = useState([])
    const fetch =async ()=>{
    const res = await axios.get(`http://localhost:3000/categories`)
    console.log(res.data);
    setData(res.data)
    }

    const [formvalue , setFormvalue] = useState({
        id: "",
        cate_name:  "",
        cate_img: ""
    })

    const onchagehandle =  (e)=>{
     setFormvalue({...formvalue ,id : new Date().getTime().toString(), [e.target.name] : e.target.value})
   console.log(formvalue)
}

function validation() {
    var ans = true;
    if (formvalue.cate_name == "") {
      toast.error("cate_name Field is required");
      ans = false;
      return false;
    }
    if (formvalue.cate_img == "") {
      toast.error(" cate_img Field is required");
      ans = false;
      return false;
    }
   
    return ans;
  }
  

   const submithandle = async (i)=>{
  i.preventDefault();
  if(validation()){
  const res =  await axios.post(`http://localhost:3000/categories` , formvalue)
  console.log(res);
  if(res.status == 201){
//    alert('')
   toast.success('data success')
   setFormvalue({...formvalue , id :"" , cate_name : "" , cate_img :""  })
  }
}
   }
    return (
        <div>
            <AHeader title="Add Categories"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">
                        
                        <div className="col-lg-12">
                            <div className="bg-light  p-lg-5 ">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Categories</h6>
                                <h1 className="mb-4">Add Categories</h1>
                                <div id="success" />
                                <form  action='' role='form' method="post" onSubmit={submithandle} id="contactForm" noValidate="novalidate" >
                                    <div className="form-row">
                                        <div className="col-sm-12 control-group">
                                            <input type="text" 
                                            className="form-control border-0 p-4" 
                                            name='cate_name'
                                            value={formvalue.cate_name}
                                            onChange={onchagehandle}
                                            id="name" placeholder="Categories Name" required="required" data-validation-required-message="Please enter Categories name" />
                                            <p className="help-block text-danger" />
                                        </div>
                                        <div className="col-sm-12 control-group">
                                            <input type="url"
                                             name='cate_img'
                                             value={formvalue.cate_img}
                                             onChange={onchagehandle}
                                            className="form-control border-0 p-4" id="cate_img" placeholder="Categories Image" required="required" data-validation-required-message="Please enter Categories Images" />
                                            <p className="help-block text-danger" />
                                        </div>
                                    </div>
                                   
                                    <div>
                                        <button className="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div >

            <AFooter />
        </div>
    )
}

export default Add_categories