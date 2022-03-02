<?php
$id = $_GET['id'];
$grade = $_GET['ch'];

$con = mysqli_connect('localhost','root','','cee_national_examinations');

$sel  = mysqli_query($con, "select * from cee_national_examination where ID='$id'");

$dope = mysqli_query($con,"update cee_national_examination set Chapter='$grade' where ID='$id'");

if ($dope) {
echo "done";
}
$num = mysqli_num_rows($sel);
echo $num;
$sell = mysqli_query($con,"SELECT * FROM euee where ID='$id'");
$cha = mysqli_fetch_assoc($sell);
echo "the chapter is".$cha['Chapter'];