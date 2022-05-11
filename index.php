<?php session_start();
session_destroy(); ?>
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php' ?>

    <main>

        <div class='px-4 py-5 my-5 text-center'>
            

            <h1 class='display-5 fw-bold'>Hast du Tiere gern?</h1>

            <form action='/page1.php' method='post'>
                <div class='col-lg-6 mx-auto'>
                    <p class='lead mb-4'>Nimm teil an der Quiz und prüfe dein Wissen!</p>
                    <div class='d-grid gap-2 d-sm-flex justify-content-sm-center'>
                        <input type="hidden" name="lastPageID" value="question-01">
                        <input type="hidden" id="achievedPoints" name="achievedPoints">
                        <p id="validation-warning" class="warning"></p>
                        <button type='submit' class='btn btn-outline-dark btn-lg px-4'>QUIZ STARTEN</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>