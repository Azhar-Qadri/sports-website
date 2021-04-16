<?php 

class db_connect
{
	function connection()
	{
		$con=mysqli_connect('localhost','root','','office_sports');
		return $con;
	}
}

?>