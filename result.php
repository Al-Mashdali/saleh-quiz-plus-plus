<?php
session_start();

$total = 5;
$points = (int)$_SESSION["points-1"]
    + (int)$_SESSION["points-2"]
    + (int)$_POST["points"];
?>

<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>

    <main>
    <?php
        echo "<div class='px-4 py-5 my-5 text-center'>";
        echo " <img class='question-image' src='../img/rings.jpg' alt=''> ";

        echo " <h1 class='display-5 fw-bold'>ZUSAMMENFASSUNG</h1> ";
     
        echo " <div class='col-lg-6 mx-auto'> ";
        echo "<p class='lead mb-4'> DEIN SCORE IST <?= $points; ?>/<?= $total ?> PÜNKTE!</p> ";

        echo " <form action='/index.php' method='post'> ";
        echo "<div class='d-grid gap-2 d-sm-flex justify-content-sm-center'> ";
        echo " <button type='submit' class='btn btn-outline-secondary btn-lg px-4'>Nochmals spielen</button> ";
    
    ?>
    </main>
</body>

</html>