<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];   
$STUDENT->password = md5($_POST['password']);

$STUDENT->create();
if ($STUDENT->id) {
    $STUDENT->login($STUDENT->student_id, $STUDENT->password);

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
?>
 
