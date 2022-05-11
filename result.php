<?php

include 'inc/data-collector.php';
include 'php/db.php';


if (isset($_SESSION['achievedPointsList'])) {
    $achievedPointsList = $_SESSION['achievedPointsList'];
} else {
    $achievedPointsList = array();
}

if (isset($_SESSION['maxPointsList'])) {
    $maxPointsList = $_SESSION['maxPointsList'];
} else {
    $maxPointsList = array();
}

$total = 0;

foreach ($achievedPointsList as $key => $value) {
    $total += $value;
}

$maxTotal = 0;

foreach ($maxPointsList as $key => $value) {
    $maxTotal += $value;
}

if ($total / $maxTotal >= 0.8) {
    $exclamation = "Great";
} else if ($total / $maxTotal >= 0.4) {
    $exclamation = "Good";
} else {
    $exclamation = "Autsch";
}

?>


<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>

    <main>
        <div class='px-4 py-5 my-5 text-center'>
            <h1 class='display-5 fw-bold'>ZUSAMMENFASSUNG</h1>
            <p class='lead mb-4'><?php echo $exclamation; ?>, DEIN SCORE IST <?php echo $total; ?>/<?php echo $maxTotal ?> PÜNKTE!</p>
            <form action='/index.php' method='post'>
                <div class='col-lg-6 mx-auto'>
                    <div class='d-grid gap-2 d-sm-flex justify-content-sm-center'>
                        <button type='submit' class='btn btn-outline-secondary btn-lg px-4'>Nochmals spielen</button>
                        <p class="warning"></p>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
