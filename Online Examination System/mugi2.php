<?php
$Question=$_POST["Question"];
$A=$_POST["A"];
$B=$_POST["B"];

$ANS=$_POST["Ans"];

$con=mysqli_connect("localhost:3308","root","","mydb");
$query="TRUNCATE TABLE 18php123";
mysqli_query($con,$query);
for($i=0;$i<count($A);$i++)
{
	 $query="insert into 18php123(Question,A,B,Ans) values('{$Question[$i]}','{$A[$i]}','{$B[$i]}',{$ANS[$i]}')";
	 echo $query."<br>";
	 mysqli_query($con,$query);

}
            echo "<script> alert('Question paper Updated');</script>";
    		
?>