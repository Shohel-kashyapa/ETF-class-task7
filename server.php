<?php
  $JSON - file_get_contents('students.json');
  $studentDetails = json_decode($JSON);

  foreach ($studentDetails as $student) {
    echo json_encode($student);
  }
?>