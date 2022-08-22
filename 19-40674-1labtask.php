<?php
$servername="localhost";
$username="root";
$password="";
$dbname="labtask";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else

	echo "successful connection";
	{
		
		$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES(1001,'SHAOWN BARUA','shaown@gmail.com',25000)";
		$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES(1002'IFTU','iftu@gmail.com',15000)";
		$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES(1003'ABRAR','abrar@gmail.com',35000)";
		$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES(1004'niladro','niladro@gmail.com',45000)";
	
	//$q="DELETE FROM Employee where ID=1002"
	
	//$q="UPDATE My guest SET NAME='SUPRATIK' where ID=1003";
	
	
		
		$result=$conn->query($q);
	if($result)
		echo "inserted successful";
	else
		echo " not inserted";
}
	echo "successful connection";
?>