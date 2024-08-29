import React, { useEffect, useState } from 'react'
import AHeader from '../component/AHeader'
import AFooter from '../component/AFooter'
import axios from 'axios'
import { toast } from 'react-toastify'

function Add_blog() {

    useEffect(()=>{
        fetch()
    }, [])
   const [data , setData ] = useState([])
    const fetch =async ()=>{
    const res = await axios.get(`http://localhost:3000/blog`)
    console.log(res.data);
    setData(res.data)
    }

    const [formvalue , setFormvalue] = useState({
        id: "",
        title: "",
        description: "",
        blog_img: ""
    })

    const onchagehandle =  (e)=>{
     setFormvalue({...formvalue ,id : new Date().getTime().toString(), [e.target.name] : e.target.value})
   console.log(formvalue)
}


function validation() {
    var ans = true;
    if (formvalue.title == "") {
      toast.error("title Field is required");
      ans = false;
      return false;
    }
    if (formvalue.description == "") {
      toast.error(" description Field is required");
      ans = false;
      return false;
    }
    if (formvalue.blog_img == "") {
      toast.error("blog_img is required");
      ans = false;
      return false;
    }
    return ans;
  }
   const submithandle = async (i)=>{
  i.preventDefault();
  if(validation()){
  const res =  await axios.post(`http://localhost:3000/blog` , formvalue)
  console.log(res);
  if(res.status == 201){
//    alert('data success')
toast.success('data success')
   setFormvalue({...formvalue ,
    id: "",
    title: "",
    description: "",
    blog_img: ""
    })
  }
}
   }


    return (
        <div>
            <AHeader title="Add Blog"/>
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">
                        
                        <div className="col-lg-12">
                            <div className="bg-light  p-lg-5 ">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2"><td>Blog</td></h6>
                                <h1 className="mb-4">Add Blog</h1>
                                <div id="success" />
                                <form name="sentMessage"   action='' role='form' method="post" onSubmit={submithandle} id="contactForm" noValidate="novalidate">
                                    <div className="form-row">
                                        <div className="col-sm-12 control-group">
                                            <input type="text"
                                            onChange={onchagehandle}
                                            name="title"
                                            value={formvalue.title}
                                            className="form-control border-0 p-4"  placeholder="Blog Title" required="required" data-validation-required-message="Please enter your name" />
                                            <p className="help-block text-danger" />
                                        </div>
                                        <div className="col-sm-12 control-group">
                                            <input type="url"
                                             onChange={onchagehandle}
                                             name="blog_img"
                                             value={formvalue.blog_img}
                                            className="form-control border-0 p-4"  placeholder="Blog Image" required="required" data-validation-required-message="Please enter your email" />
                                            <p className="help-block text-danger" />
                                        </div>
                                    </div>
                                   
                                    <div className="control-group">
                                        <textarea
                                        
                                        onChange={onchagehandle}
                                             name="description"
                                             value={formvalue.description}
                                        className="form-control border-0 py-3 px-4" rows={3}  placeholder="Blog Description" required="required" data-validation-required-message="Please enter your message" defaultValue={""} />
                                        <p className="help-block text-danger" />
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

export default Add_blog