<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->batch = $_POST['batch'];
$STUDENT->age = $_POST['age'];
$birth_month = $_POST['birth_month'];
$birth_day = $_POST['birth_day'];
$birth_year = $_POST['birth_year'];
$STUDENT->birth_date = $birth_year . "-" . $birth_month . "-" . $birth_day;
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
 
