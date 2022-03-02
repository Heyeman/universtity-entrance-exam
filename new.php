<?php
$id = $_GET['id'];
$grade = $_GET['grade'];

$con = mysqli_connect('localhost','root','','cee_national_examinations');

$sel  = mysqli_query($con, "select * from cee_national_examination where ID='$id'");

$dope = mysqli_query($con,"update cee_national_examination set GradeHS='$grade' where ID='$id'");
if ($dope) {
echo "done";
}
$num = mysqli_num_rows($sel);
echo $num;
