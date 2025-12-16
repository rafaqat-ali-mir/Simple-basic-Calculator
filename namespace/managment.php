<?php
require_once './teacher.php';
require_once './student.php';

// Teacher Object
$teacher = new \teacher\JoiningDetail();
echo "Teacher Joining Date: " . $teacher->joiningdate();
echo "<br>";

// Student Object
$student = new \student\JoiningDetail();
echo "Student Admission Date: " . $student->AdmissionDate();
