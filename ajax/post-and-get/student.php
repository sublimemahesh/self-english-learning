<?php

include '../../class/include.php';
 
if ($_POST['action'] == 'UPDATESTUDENTLEVEL') {

    $STUDENT = new Student($_POST['id']);
    $STUDENT->level = $_POST['student_level'];
    $result = $STUDENT->updateLevel();
    if ($result) {
        $result['status'] = 'success';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    } else {
        $result['status'] = 'error';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    }
}
?> 