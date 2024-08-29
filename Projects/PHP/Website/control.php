<?php
include_once('Model.php'); // Step-1: Load model.

class control extends Model // Step-2: Extends
{
	// magic function that call automatically when you declare class object.
	
	function __construct()
	{
		session_start();
		
		Model:: __construct(); // Step-3: call model __construct.
		
		date_default_timezone_set('asia/calcutta');
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/contact':
			if (isset($_REQUEST['submit']))
			{
				//echo "<pre>";print_r($_REQUEST);exit;
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$comment=$_REQUEST['comment'];
				$subject=$_REQUEST['subject'];
				$mobile=$_REQUEST['mobile'];
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				
				$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment,"subject"=>$subject,"mobile"=>$mobile,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script>
					alert('Contact Inquiry Registered Success');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Failed');
					</script>";
				}
			}
			include_once('contact.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				//echo "<pre>";print_r($_REQUEST);exit;
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				
				$where=array("email"=>$email,"password"=>$password);
				
				$res=$this->select_where('customer',$where);
				
				$chk=$res->num_rows;
				
				if($chk==1)
				{
					$fetch=$res->fetch_object();
					$_SESSION['username']=$fetch->email;
					$_SESSION['name']=$fetch->name;
					$_SESSION['address']=$fetch->address;
					$_SESSION['mobile']=$fetch->mobile;
					$_SESSION['cid']=$fetch->cid;
					
					echo "<script>
							alert('Customer Login Success');
							window.location='index';
						</script>";
				}
				else
				{
					echo "<script>
							alert('Login Failed');
						</script>";
				}
			}
			
			include_once('login.php');
			break;
			
			case '/signup':
			$Countries_arr=$this->select('country');
			if(isset($_REQUEST['submit']))
			{
				//echo "<pre>";print_r($_REQUEST);exit;
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$address=$_REQUEST['address'];
				$mobile=$_REQUEST['mobile'];
				$cid=$_REQUEST['cid'];
				
				//img upload
				$file=$_FILES['file']['name'];
				$path="../Website/Upload/customer".$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
			    //echo "<pre>";print_r($_FILES);exit;
				
				$created_at=date("Y-m-d H:i:s");
				$updated_at=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,"email"=>$email,"password"=>$password,"address"=>$address,"mobile"=>$mobile,"cid"=>$cid,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('customer',$arr);
				
				if($res)	//1 means true
				{
						echo "<script>
								alert('Customer Register Successfully');
							</script>";
				}
				else
				{
					echo "<script>
						alert('Registration Faild');
						</script>";
				}
			}
			include_once('signup.php');
			break;
			
		}
	}
	
}

$obje=new control;
?>