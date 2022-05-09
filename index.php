<?php session_start();
session_destroy(); ?>
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php' ?>

    <main>

        <div class='px-4 py-5 my-5 text-center'>
            <svg class='d-block mx-auto mb-4' stroke='currentColor' fill='currentColor' stroke-width='0' viewBox='0 0 24 24' alt='' width='72' height='57' xmlns='http://www.w3.org/2000/svg'>
                <circle cx='4.5' cy='9.5' r='2.5'></circle>
                <circle cx='9' cy='5.5' r='2.5'></circle>
                <circle cx='15' cy='5' r='2.5'></circle>
                <circle cx='19.5' cy='9.5' r='2.5'></circle>
                <path d='M17.34 14.86c-.87-1.02-1.6-1.89-2.48-2.91-.46-.54-1.05-1.08-1.75-1.32-.11-.04-.22-.07-.33-.09-.25-.04-.52-.04-.78-.04s-.53 0-.79.05c-.11.02-.22.05-.33.09-.7.24-1.28.78-1.75 1.32-.87 1.02-1.6 1.89-2.48 2.91-1.31 1.31-2.92 2.76-2.62 4.79.29 1.02 1.02 2.03 2.33 2.32.73.15 3.06-.44 5.54-.44h.18c2.48 0 4.81.58 5.54.44 1.31-.29 2.04-1.31 2.33-2.32.31-2.04-1.3-3.49-2.61-4.8z'></path>
            </svg>

            <h1 class='display-5 fw-bold'>Tierliebhaber?</h1>

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