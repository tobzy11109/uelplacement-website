<?php
session_start();
if ($_session['role']!="admin"){
  header("location:login.php");
}
?>
<h1>Admin dashboard</h1>
<ul>
  <li><a href="add_drive.php"> Add drive</a></li>
  <li><a href="manage_training_program.php"> manage training program</a></li>
  <li><a href="analyse_placement.php"> Analyse placement</a></li>
  <li><a href="View_student_details.php"> View student Details</a></li>
  <li><a href="Add_user.php"> Add user</a></li>
  <li><a href="Delete_user.php"> Delete user</a></li>
</ul>