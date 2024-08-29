<?php
include_once('model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		
		model::__construct();
		
		date_default_timezone_set('asia/calcutta');
		
		$url=$_SERVER['PATH_INFO'];
		switch ($url)
		{
			case '/Index':
			$data_customer=$this->select('customer');
			include_once('Index.php');
			break;
			
			case '/Add_Customer':
			if (isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Address=$_REQUEST['Address'];
				$Mobile=$_REQUEST['Mobile'];
				
				$Image=$_FILES['Image']['Name'];
				$path="upload/customer/".$Image;
				$tmp_file=$_FILES['Image']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,"Email"=>$Email,"Address"=>$Address,"Mobile"=>$Mobile,"Image"=>$Image,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					
					echo "<script>
					alert('Customer Added Successfully');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Failed');
					</script>";
				}
			}
			include_once('Add_Customer.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['delID']))
			{
				$ID=$_REQUEST['delID'];
				
				$where=array("ID"=>$ID);
				
				//delete user image 
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					unlink('../upload/customer/'.$Image);
					echo "<script> 
						alert('Delete Success'); 
						window.location='Index';
					</script>";
				}
					
			}
			break;
			
			case '/Edit_Customer';
			if(isset($_REQUEST['editCus_Id']))
			{
				$ID=$_REQUEST['editCus_Id'];
				$where=array("ID"=>$ID);
			    $run=$this->select_where('customer',$where);
			    $fetch=$run->fetch_object();
				
				$Image=$fetch->Image;
				
				if(isset($_REQUEST['submit']))
				{
					$Name=$_REQUEST['Name'];
					$Email=$_REQUEST['Email'];
					$Address=$_REQUEST['Address'];
					$Mobile=$_REQUEST['Mobile'];
					
					$updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						
						$Image=$_FILES['Image']['Name'];
						$path="../upload/customer/".$Image;
						$tmp_file=$_FILES['Image']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$arr=array("Name"=>$Name,"Email"=>$Email,"Address"=>$Address,"Mobile"=>$Mobile,"Image"=>$Image,"updated_at"=>$updated_at);
						
						$res=$this->update('customer',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							unlink('../upload/customer'.$userfile);
							echo "<script>
					        alert('Customer Update success');
							window.location='Index';
					        </script>";
						}
					}
					else
						{
							$arr=array("Name"=>$Name,"Email"=>$Email,"Address"=>$Address,"Mobile"=>$Mobile,"Image"=>$Image,"updated_at"=>$updated_at);
							$res=$this->update('customer',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Customer Update success');
							    window.location='Index';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('Edit_Customer.php');
			break;
			
			case '/Admin_login':
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$where=array("email"=>$email,"password"=>$password);
				
				$res=$this->select_where('admin',$where);
				$chk=$res->num_rows;
				if($chk==1)
				{
					$_SESSION['admin']=$Name;
					echo "<script>
					alert('Admin Login Success');
					window.location='Index';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login Failed');
					</script>";
				}
			}
			include_once('Admin_login.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
					alert('Admin Logout Success');
					window.location='Admin_login';
				</script>";
			break;
		}
	}
}

$obj=new control;
?>