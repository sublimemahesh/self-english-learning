<?php

include '../../class/include.php';

if ($_POST['action'] == 'UPDATESTUDENTLEVEL') {

    if (isset($_POST['que_1'])) {
        $que_1 = $_POST['que_1'];
    }

    if (isset($_POST['que_2'])) {
        $que_2 = $_POST['que_2'];
    }
    if (isset($_POST['que_3'])) {
        $que_3 = $_POST['que_3'];
    }
    if (isset($_POST['que_4'])) {
        $que_4 = $_POST['que_4'];
    }
    if (isset($_POST['que_5'])) {
        $que_5 = $_POST['que_5'];
    }
 

    $cal = $que_1 + $que_2 + $que_3 + $que_4 + $que_5;

    $STUDENT = new Student($_POST['id']);

    if ($cal <= 2) {
        $STUDENT->status = 1;
    } elseif ($cal <= 3) {
        $STUDENT->status = 2;
    } else if ($cal <= 4) {
        $STUDENT->status = 3;
    }


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