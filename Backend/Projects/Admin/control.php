<?php
include_once('../User_pannel/Website/Model.php'); //step 1 load model

class control extends Model // step 2 extends
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
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Password=$_REQUEST['Password'];
				$where=array("Name"=>$Name,"Password"=>$Password);
				
				$res=$this->select_where('admins',$where);
				$chk=$res->num_rows;
				if($chk==1)
				{
					$_SESSION['admins']=$Name;
					echo "<script>
					alert('Admin Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login Failed');
					</script>";
				}
			}
					
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admins']);
			echo "<script>
					alert('Admin Logout Success');
					window.location='index';
					</script>";
			break;

			case '/dashboard':
			include_once('dashboard.php');
			break;

			case '/add_cate':
			if (isset($_REQUEST['submit']))
			{
				$Cate_name=$_REQUEST['Cate_name'];
				//echo"<pre>";print_r($_REQUEST);exit;

                $file=$_FILES['file']['name'];
				$path="../upload/category/".$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				
				$arr=array("Cate_name"=>$Cate_name,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('category',$arr);
				if($res)
				{
					echo "<script>
					alert('Category added Successfully');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Failed');
					</script>";
				}
			}
			include_once('add_cate.php');
			break;
         
			case '/add_emp':
			if (isset($_REQUEST['submit']))
			{
				$Emp_name=$_REQUEST['Emp_name'];
				$Password=$_REQUEST['Password'];
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				//echo "<pre>";print_r($_REQUEST);exit;
				
				$arr=array("Emp_name"=>$Emp_name,"Password"=>$Password,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('employee',$arr);
				if($res)
				{
					echo "<script>
					alert('Employee added Successfully');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Failed');
					</script>";
				}
			}
			include_once('add_emp.php');
			break;

			case '/add_prod':
			if (isset($_REQUEST['submit']))
			{
				$Product_name=$_REQUEST['Product_name'];
				$Disc_price=$_REQUEST['Disc_price'];
				$Main_price=$_REQUEST['Main_price'];
				$Description=$_REQUEST['Description'];
			    //echo "</pre>";print_r($_REQUEST);exit;

				$file=$_FILES['file']['name'];
				$path="../upload/product/".$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				//echo "<pre>";print_r($_FILES);exit;
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				//echo "<pre>";print_r($_REQUEST);exit;
				
				$arr=array("Product_name"=>$Product_name,"Disc_price"=>$Disc_price,"Main_price"=>$Main_price,"file"=>$file,"Description"=>$Description,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('product',$arr);
				if($res)
				{
					echo "<script>
					alert('Product added Successfully');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Failed');
					</script>";
				}
			}
			include_once('add_prod.php');
			break;

			case '/manage_cate':
			$data_category=$this->select('category');
			include_once('manage_cate.php');
			break;
          
			case '/manage_prod':
			$data_product=$this->select('product');
            include_once('manage_prod.php');
            break;

			case '/manage_emp':
			$data_employee=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/Customer':
			$data_customer=$this->select('customer');
			include_once('Customer.php');
			break;
			
			case '/Feedback':
			$data_feedback=$this->select('feedback');
			include_once('Feedback.php');
			break;
			
			case '/Contact':
			$data_contact=$this->select('contact');
			include_once('Contact.php');
			break;
			
			case '/delete':
				
				if(isset($_REQUEST['delCate_Id']))
				{
					$Cate_Id=$_REQUEST['delCate_Id'];
					
					$where=array("Cate_Id"=>$Cate_Id);
					$res=$this->delete_where('category',$where);
					if($res)
					{
						echo"<script>
						alert('Category Delete Success');
						window.location='manage_cate';
						</script>";
					}
				}

				if(isset($_REQUEST['delProd_ID']))
				{
					$Prod_ID=$_REQUEST['delProd_ID'];
					
					$where=array("Prod_ID"=>$Prod_ID);
					$res=$this->delete_where('product',$where);
					if($res)
					{
						echo"<script>
						alert('Product Delete Success');
						window.location='manage_prod';
						</script>";
					}
				}
				
				if(isset($_REQUEST['delEmp_ID']))
				{
					$Emp_ID=$_REQUEST['delEmp_ID'];
					
					$where=array("Emp_ID"=>$Emp_ID);
					$res=$this->delete_where('employee',$where);
					if($res)
					{
						echo"<script>
						alert('Employee Delete Success');
						window.location='manage_emp';
						</script>";
					}
				}
				
				if(isset($_REQUEST['delID']))
				{
					$ID=$_REQUEST['delID'];
					
					$where=array("ID"=>$ID);
					$res=$this->delete_where('customer',$where);
					if($res)
					{
						echo"<script>
						alert('Customer Delete Success');
						window.location='Customer';
						</script>";
					}
				}
				
				if(isset($_REQUEST['delFeed_ID']))
				{
					$Feed_ID=$_REQUEST['delFeed_ID'];
					
					$where=array("Feed_ID"=>$Feed_ID);
					$res=$this->delete_where('Feedback',$where);
					if($res)
					{
						echo"<script>
						alert('Feedback Delete Success');
						window.location='Feedback';
						</script>";
					}
				}
				
				if(isset($_REQUEST['delConct_ID']))
				{
					$Conct_ID=$_REQUEST['delConct_ID'];
					
					$where=array("Conct_ID"=>$Conct_ID);
					$res=$this->delete_where('contact',$where);
					if($res)
					{
						echo"<script>
						alert('Contact Delete Success');
						window.location='Contact';
						</script>";
					}
				}
				
			case '/edit_cate';
			if(isset($_REQUEST['editCate_Id']))
			{
				$Cate_id=$_REQUEST['editCate_Id'];
				$where=array("Cate_id"=>$Cate_id);
			    $run=$this->select_where('category',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Cate_name=$_REQUEST['Cate_name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/category".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Cate_name"=>$Cate_name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('category',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/category'.$userfile);
							echo "<script>
					        alert('Ctegories Update success');
							window.location='manage_cate';
					        </script>";
						}
					}
					else
						{
							$arr=array("Cate_name"=>$Cate_name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('category',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Categories Update success');
							    window.location='manage_cate';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('edit_cate.php');
			break;
			
			case '/edit_prod';
			if(isset($_REQUEST['editProd_ID']))
			{
				$Prod_ID=$_REQUEST['editProd_ID'];
				$where=array("Prod_ID"=>$Prod_ID);
			    $run=$this->select_where('product',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Product_name=$_REQUEST['Product_name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/product".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Product_name"=>$Product_name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('product',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/product'.$userfile);
							echo "<script>
					        alert('Product Update success');
							window.location='manage_prod';
					        </script>";
						}
					}
					else
						{
							$arr=array("Product_name"=>$Product_name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('product',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Product Update success');
							    window.location='manage_prod';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('edit_prod.php');
			break;
			
			case '/edit_emp';
			if(isset($_REQUEST['editEmp_ID']))
			{
				$Emp_ID=$_REQUEST['editEmp_ID'];
				$where=array("Emp_ID"=>$Emp_ID);
			    $run=$this->select_where('employee',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Emp_name=$_REQUEST['Emp_name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/employee".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Emp_name"=>$Emp_name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('employee',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/employee'.$userfile);
							echo "<script>
					        alert('Employee Update success');
							window.location='manage_emp';
					        </script>";
						}
					}
					else
						{
							$arr=array("Emp_name"=>$Emp_name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('employee',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Employee Update success');
							    window.location='manage_emp';
					            </script>";
							}						
						}					
				}
			}
			include_once('edit_emp.php');
			break;
			
			case '/edit_cus';
			if(isset($_REQUEST['editID']))
			{
				$ID=$_REQUEST['editID'];
				$where=array("ID"=>$ID);
			    $run=$this->select_where('customer',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Name=$_REQUEST['Name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/customer".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Name"=>$Name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('customer',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/customer'.$userfile);
							echo "<script>
					        alert('Customer Update success');
							window.location='Customer';
					        </script>";
						}
					}
					else
						{
							$arr=array("Name"=>$Name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('customer',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Customer Update success');
							    window.location='Customer';
					            </script>";
							}						
						}					
				}
			}
			include_once('edit_cus.php');
			break;
			
			case '/edit_feed';
			if(isset($_REQUEST['editFeed_ID']))
			{
				$Feed_ID=$_REQUEST['editFeed_ID'];
				$where=array("Feed_ID"=>$Feed_ID);
			    $run=$this->select_where('feedback',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Name=$_REQUEST['Name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/feedback".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Name"=>$Name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('feedback',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/feedback'.$userfile);
							echo "<script>
					        alert('Feedback Update success');
							window.location='Feedback';
					        </script>";
						}
					}
					else
						{
							$arr=array("Name"=>$Name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('feedback',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Feedback Update success');
							    window.location='Feedback';
					            </script>";
							}						
						}					
				}
			}
			include_once('edit_feed.php');
			break;
			
			case '/edit_cont';
			if(isset($_REQUEST['editConct_ID']))
			{
				$Conct_ID=$_REQUEST['editConct_ID'];
				$where=array("Conct_ID"=>$Conct_ID);
			    $run=$this->select_where('contact',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Name=$_REQUEST['Name'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/contact".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Name"=>$Name,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('contact',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/contact'.$userfile);
							echo "<script>
					        alert('Contact Update success');
							window.location='Contact';
					        </script>";
						}
					}
					else
						{
							$arr=array("Name"=>$Name,
							"Updated_at"=>$Updated_at);
							$res=$this->update('contact',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('Contact Update success');
							    window.location='Contact';
					            </script>";
							}						
						}					
				}
			}
			include_once('edit_cont.php');
			break;
			
			case '/Profile':
			
				$where=array("ID"=>$_SESSION['ID']);
				$res=$this->select_where('admins',$where);
				$fetch=$res->fetch_object();
				echo "<pre>"; print_r($res);exit;
				
			include_once('Profile.php');
			break;
			
			case '/status':
			if(isset($_REQUEST['statusID']))
			{
				$ID=$_REQUEST['statusID'];
				
				$where=array("ID"=>$ID);
				
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('Unblock success')
						window.location='Customer';
						</script>";
					}
				}
				else{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						unset($_SESSION['user']);
						unset($_SESSION['Name']);
						unset($_SESSION['ID']);
						echo "<script>
						alert('Block success')
						window.location='Customer';
						</script>";
					}
				}
			}			
			break;
			
			default:
			include_once('pagenotfound.php');
			break;
		}
	}
}
$obj=new control;
?>