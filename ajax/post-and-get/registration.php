<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);
 
$STUDENT->full_name = $_POST['full_name'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->address = $_POST['address'];
$STUDENT->batch = $_POST['batch'];
$STUDENT->age = $_POST['age'];
$STUDENT->password = md5($_POST['password']); 
 
$STUDENT->create();
if ($STUDENT->id) {
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} else {
    $result = ["status" => 'error'];
    echo json_encode($result);
    exit();
}

?>
 
