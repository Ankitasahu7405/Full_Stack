<?php
include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		session_start();
		
		model::__construct();// step 3 call model __construct
		
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
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Phone_Number=$_REQUEST['Phone_Number'];
				$Subject=$_REQUEST['Subject'];
				$Message=$_REQUEST['Message'];
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,"Email"=>$Email,"Phone_Number"=>$Phone_Number,"Subject"=>$Subject,"Message"=>$Message,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
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

			case '/testimonial':
			include_once('testimonial.php');
			break;

			case '/menu':
			include_once('menu.php');
			break;

			case '/team':
			include_once('team.php');
			break;

			case '/login':
			if(isset($_REQUEST['submit']))
			{
				//echo "<pre>";print_r($_REQUEST);exit;
				$Email=$_REQUEST['Email'];
				$Password=$_REQUEST['Password'];	//Password encrypted
			
				$where=array("Email"=>$Email,"Password"=>$Password);
				
				$res=$this->select_where('customer',$where);
			
				$chk=$res->num_rows;	//condition res check by rows
				
				if($chk==1)	//1 means true
				{
					$fetch=$res->fetch_object();
					$_SESSION['user']=$fetch->Email;
					$_SESSION['Name']=$fetch->Name;
					$_SESSION['ID']=$fetch->ID;
					$_SESSION['Address']=$fetch->Address;
					$_SESSION['Mobile']=$fetch->Mobile;
					$_SESSION['Countries_Id']=$fetch->Countries_Id;
				    //echo "<pre>";print_r($res);exit;
					
					echo "<script>
							alert('Customers Login Success');
							window.location='index';
						</script>";
				}
				else
				{
					echo "<script>
						alert('Login Faild');
						</script>";
				}
			}
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['user']);
			unset($_SESSION['Name']);
			unset($_SESSION['ID']);
			echo "<script>
					alert('Customers Logout Success');
					window.location='index';
				   </script>";
			break;

			case '/Profile':
				$where=array("ID"=>$_SESSION['ID']);
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				//echo"<pre>";print_r($res);exit;

			include_once('Profile.php');
			break;

			case '/signup':
			$Countries_arr=$this->select('countries');
			if(isset($_REQUEST['submit']))
			{
				//echo "<pre>";print_r($_REQUEST);exit;
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Password=$_REQUEST['Password'];
				$Address=$_REQUEST['Address'];
				$Mobile=$_REQUEST['Mobile'];
				$Countries_Id=$_REQUEST['Countries_Id'];
				
				//img upload
				$file=$_FILES['file']['name'];
				$path="../upload/customer/".$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
			    //echo "<pre>";print_r($_FILES);exit;
				
				$Created_at=date("Y-m-d H:i:s");
				$Updated_at=date("Y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,"Email"=>$Email,"Password"=>$Password,"Address"=>$Address,"Mobile"=>$Mobile,"Countries_Id"=>$Countries_Id,"file"=>$file,"Created_at"=>$Created_at,"Updated_at"=>$Updated_at);
				
				$res=$this->insert('customer',$arr);
				
				if($res)	//1 means true
				{
						echo "<script>
								alert('customers Register Success');
							</script>";
				}
				else
				{
					echo "<script>
						alert('Register Faild');
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