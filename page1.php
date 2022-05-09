<?php

include 'php/db.php';

$currentQuestionIndex = 0;

if (isset($_POST['lastQuestionIndex'])) {
    $lastQuestionIndex = $_POST['lastQuestionIndex'];

    if (isset($_POST['nextQuestionIndex'])) {
        $currentQuestionIndex = $_POST['nextQuestionIndex'];
    }
}

if (isset($_SESSION['questions'])) {
    $questions = $_SESSION['questions'];
}
else{
    $questions = getQuestions();
    $_SESSION['questions'] = $questions;
}


//echo "<pre>";
//print_r($_SESSION['questions']);
//echo "</pre>";
?>

<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php' ?>

    <main>

        <div class='px-4 py-5 my-5 text-center'>
            <!-- <img class='question-image' src='../img/rings.jpg' alt=''> -->

            <h1 class='display-5 fw-bold'>Frage <?php echo $currentQuestionIndex + 1; ?> </h1>

            <div class='col-lg-6 mx-auto'>
                <p class='lead mb-4'><?php echo $questions[$currentQuestionIndex]['Text']; ?></p>

                <form method='post' onsubmit="return validateQuestion();">

                    <?php
                    $answers = $questions[$currentQuestionIndex]['Answers'];
                    

                    for ($i = 0; $i < count($answers); $i++) {
                        echo "<div class='form-check'>";

                        $isCorrect = $answers[$i]['IsCorrectAnswer'];
                        echo " <input class='form-check-input' type='checkbox' value='" . $isCorrect . "'  id='flexCheckDefault' ><br> ";
                        echo " <label class='form-check-label' for='flexCheckDefault'> ";

                        $answers = $questions[$currentQuestionIndex]['Answers'];
                        echo $answers[$i]['Text'];

                        echo "</label>";
                        echo "</div>";
                    }
                    ?>

                    <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
                    <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex + 1; ?>">

                    <p id='validation-warning' class='warning'></p>

                    <div class='d-grid gap-2 d-sm-flex justify-content-sm-center'>
                        <button type='submit' class='btn btn-outline-dark btn-lg px-4'>WEITER</button>
                    </div>
                </form>
            </div>
        </div>


        <script src='js/main.js'></script>
    </main>

</body>

</html>