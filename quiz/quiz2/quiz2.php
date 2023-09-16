<!DOCTYPE html>
<html lang="en">

<head>
    <title>QuizC</title>
    <?php
    include_once '../../partials/head.html';
    ?>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">QuizA</a>
        </div>
    </nav>
    <div class='bg-light rounded-3 m-4 p-3 shadow '>
        <div class="d-flex flex-column">
            <form class='d-flex gap-3' id="form">
                <div class="mb-3">
                    <label for="pais" class="form-label">Producto</label>
                    <select class="form-select" name='pais' id='pais'>
                        <option selected>Seleccione</option>
                        <option value="España">España</option>
                        <option value="Italia">Italia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Estados_Unidos">Estados Unidos</option>
                        <option value="Canada">Canada</option>
                    </select>

                </div>
                <div class='d-flex align-items-center mt-3'>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <hr />
            <div id='caja'></div>
        </div>
    </div>
    <div id="alert"></div>
    <?php
    include_once '../../partials/cdn.html';
    ?>
    <script>


        $(document).ready(function () {
            $("#form").submit(function (event) {
                event.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "./controller_quiz2.php",
                    data: data,
                    success: function (resultado) {

                        $("#caja").html(resultado);

                    }
                });
            });
        });

    </script>
</body>

</html>