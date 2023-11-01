<?php
session_start();
if ($_session['role']!="student"){
  header("location:login.php");
}
?>
<h1>Student dashboard</h1>
<ul>
  <li><a href="Register.php"> Mock Aptitude test</a></li>
  <li><a href="View_Active_drives.php"> View Active drives</a></li>
  <li><a href="Register_for_drives.php"> Register for Drives</a></li>
  <li><a href="View_Profile.php"> View Profile </a></li>
  <li><a href="Update_profile.php"> Update Profile</a></li>
  <li><a href="Status_of_Applied_drives.php"> Status of Applied Drives</a></li>
  <li><a href="Delete profile.php"> Delete Profile</a></li>

</ul>