<?php
  $sid =$_GET['sid'];

  $JSON - file_get_contents('students.json');
  $studentDetails = json_decode($JSON);

  $status = 0;

  foreach ($studentDetails as $student) {
    if ($student->sid == $sid){
      $status = json_encode($student);
    }
  }

  echo $status;
?>