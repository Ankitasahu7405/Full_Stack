<?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','php_task');
	}
	function select($tbl)
	{
		$sel="select * from $tbl";
		$res=$this->conn->query($sel);
		
		while($fetch=$res->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function select_where($tbl,$where)
	{
		$col=array_keys($where);
		$value=array_values($where);
		
		$sel="select * from $tbl where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $col[$i]='$value[$i]'";
			$i++;
		}
		$res=$this->conn->query($sel);
		return $res;
	}
	
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr);
		$col_str=implode(",",$key_arr);
		
		$value_arr=array_values($arr);
		$value_str=implode("','",$value_arr);
		
		echo $ins="insert into $tbl ($col_str) values ('$value_str')";
		$res=$this->conn->query($ins);
		return $res;
	}
	
	function delete_where($tbl,$where)
	{
		$col=array_keys($where);
		$value=array_values($where);
		
		$del="delete from $tbl where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $col[$i]='$value[$i]'";
			$i++;
		}
		
		$res=$this->conn->query($del);
		return $res;
	}
	
	function update($tbl,$arr,$where)
	{
		$col=array_keys($arr);
		$value=array_values($arr);
		
		$upd="update $tbl set";
		
		$j=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count==$j+1)
			{
				$upd.=" $col[$j]='$value[$j]'";
			}
			else
			{
				$upd.=" $col[$j]='$value[$j]',";
				$j++;
			}
		}
		
		$colw=array_keys($where);
		$valuew=array_values($where);
		$upd.=" where 1=1";
		$i=0;
		foreach($where as $w)
		{
			echo $upd.=" and $colw[$i]='$valuew[$i]'";
			$i++;
		}
		
		$res=$this->conn->query($upd);
		return $res;
		
	}
}

$obj=new model;
?>