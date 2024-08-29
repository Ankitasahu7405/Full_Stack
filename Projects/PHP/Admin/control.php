<?php
include_once('model.php'); // Step-1: Load model.

class control extends model // Step-2: Extends
{
	// magic function that call automatically when you declare class object.
	
	function __construct()
	{
		session_start();
		
		model:: __construct(); // Step-3: call model __construct.
		
		date_default_timezone_set('asia/calcutta');
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/add_cate':
			if (isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				//echo"<pre>";print_r($_REQUEST);exit;

                $cate_img=$_FILES['cate_img']['name'];
				$path="../Admin/Upload/Category/".$file;
				$tmp_file=$_FILES['cate_img']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				
				$arr=array("cate_name"=>$cate_name,"cate_img"=>$cate_img,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('category',$arr);
				if($res)
				{
					echo "<script>
					alert('Category Added Successfully');
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
			
			case '/manage_cate':
			$data_category=$this->select('category');
			include_once('manage_cate.php');
			break;
			
			case '/add_prod':
			$Category_arr=$this->select('category');
			if (isset($_REQUEST['submit']))
			{
				$prod_name=$_REQUEST['prod_name'];
				$prod_desc=$_REQUEST['prod_desc'];
				$main_price=$_REQUEST['main_price'];
				$disc_price=$_REQUEST['disc_price'];
			    //echo "</pre>";print_r($_REQUEST);exit;

				$prod_image=$_FILES['prod_image']['name'];
				$path="../Admin/Upload/Product/".$file;
				$tmp_file=$_FILES['prod_image']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				//echo "<pre>";print_r($_FILES);exit;
				
				$created_at=date("y-m-d H:i:s");
				$updated_at=date("y-m-d H:i:s");
				//echo "<pre>";print_r($_REQUEST);exit;
				
				$arr=array("prod_name"=>$prod_name,"main_price"=>$main_price,"disc_price"=>$disc_price,"prod_image"=>$prod_image,"prod_desc"=>$prod_desc,"created_at"=>$created_at,"updated_at"=>$updated_at);
				
				$res=$this->insert('product',$arr);
				if($res)
				{
					echo "<script>
					alert('Product Added Successfully');
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
			
			case '/manage_prod':
			$data_product=$this->select('product');
			include_once('manage_prod.php');
			break;
			
			case '/manage_cust':
			$data_customer=$this->select('customer');
			include_once('manage_cust.php');
			break;
			
			case '/manage_cont':
			$data_contact=$this->select('contact');
			include_once('manage_cont.php');
			break;
			
			case '/manage_feed':
			$data_contact=$this->select('contact');
			include_once('manage_feed.php');
			break;
			
			case '/admin_profile':
			include_once('admin_profile.php');
			break;
			
			case '/admin_login':
			if(isset ($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$where=array("email"=>$email,"password"=>$password);
				
				$res=$this->select_where('admin',$where);
				$chk=$res->num_rows;
				if($chk==1)
				{
					$_SESSION['admin']=$email;
					echo "<script>
					alert('Admin Login Success');
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
			include_once('admin_login.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
					alert('Admin Logout Success');
					window.location='admin_login';
				 </script>";
			break;
			
			case '/blankpage':
			include_once('blankpage.php');
			break;
			
			case '/error_404':
			include_once('error_404.php');
			break;
			
		}
			
	}
	
}
$obj=new control;
?>