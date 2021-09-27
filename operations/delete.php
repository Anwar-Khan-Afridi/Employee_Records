<?php

	include('../db_con.php');
	if(isset($_GET['deleteEmp']))
	{
		$Id = $_GET['deleteEmp'];
		$sql= "DELETE FROM `employee_tbl` WHERE Id='$Id'";
		$run= mysqli_query($conn, $sql);
		if($run)
		{
			header('location:../index.php');
		}
	}

?>