<?php
SESSION_START();
$Username= $_Post['username'];
$password= $_Post['password'];
$role= $_Post['role'];
if ($username=="admin" && $password=="admin"){
  $_session ['role']="admin";
  header("location:admin.php");
}elseif ($username=="Tpo" && $password=="Tpo"){
  $_session ['role']="Tpo";
  header("location:Tpo.php");
}elseif ($username=="student" && $password=="student"){
  $_session ['role']="student";
  header("location:student.php");
} else {
  echo "invalid Usename or Password";
}
?>

