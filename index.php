<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tarea Php 1</title>
<?php
include_once 'partials/head.html';
?>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tarea Php</a>
        </div>
    </nav>
    <div class='bg-light rounded-3 m-4 p-3 shadow '>
        <div class='d-flex justify-content-center flex-column'>
            <h1>Ejercicios de php</h1>
            <div class='d-flex justify-content-center gap-3'>
                <a href='quiz/quiz1/quiz1.php' class="btn btn-outline-dark">Quiz 1 <i class="bi bi-arrow-right-circle"></i> </a>
                <a href='quiz/quiz2/quiz2.php' class="btn btn-outline-dark">Quiz 2 <i class="bi bi-arrow-right-circle"></i> </a>
            </div>
        </div>
    </div>

<?php
include_once 'partials/cdn.html';
?>
</body>

</html>