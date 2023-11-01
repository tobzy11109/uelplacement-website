<?php
session_start();
if ($_session['role']!="tpo"){
  header("location:login.php");
}
?>
<h1>Tpo dashboard</h1>
<ul>
  <li><a href="Mock_Aptitude_test.php"> Mock Aptitude test</a></li>
  <li><a href="Mock_interview.php"> Mock interview</a></li>
  <li><a href="Online_class_for_preparing_for_interview.php"> Online class for preparing for interview</a></li>
  <li><a href="View_selected_list_of_student.php"> View selected list of student </a></li>
  <li><a href="Add_user.php"> Add user</a></li>
  <li><a href="Delete_user.php"> Delete user</a></li>
</ul>