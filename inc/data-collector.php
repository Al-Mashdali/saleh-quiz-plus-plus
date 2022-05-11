<?php
session_start();

if(isset($_POST['lastQuestionIndex'])) {

    $lastQuestionIndex = $_POST['lastQuestionIndex'];

    $questionKey = 'q-' . $lastQuestionIndex;

    // ACHIEVED POINTS ------------------------

    $achievedPoints = 0;

    foreach ($_POST AS $key => $value){
        if (str_contains($key, 'a-')) {
            $achievedPoints += intval($value);
        }
    }

    if (!isset($_SESSION['achievedPointsList'])){
        $_SESSION['achievedPointsList'] = array();
    }

    $_SESSION['achievedPointsList'][$questionKey] = $achievedPoints;

    $maxPoints = intval($_POST['maxPoints']);

    if(!isset($_SESSION['maxPointsList'])){
        $_SESSION['maxPointsList'] = array();
    }


    /* put the achieved points into the list, usinf a 'q-' headed key, 
    which identifes the question in the list.*/

    $_SESSION['maxPointsList'][$questionKey] = $maxPoints;
}

?>