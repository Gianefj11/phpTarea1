<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz1</title>
    <?php
    include_once '../../partials/head.html';
    ?>
</head>
<?php
unset($_SESSION["dataProducto"]);
unset($_SESSION["montoFinal"]);
session_start();
$_SESSION["dataProducto"] = array();
$_SESSION["montoFinal"]= 0;
?>
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
                    <label for="producto" class="form-label">Producto</label>
                    <input type="text" name="nombreProducto" class="form-control" id="producto">

                </div>
                <div class="mb-3">
                    <label for="monto" class="form-label">Monto</label>
                    <input type="number" class="form-control" name="montoProducto" id="monto">
                </div>
                <div class='d-flex align-items-center mt-3'>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <hr />

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Monto</th>
                    </tr>
                </thead>
                <tbody id='tabla'>

                </tbody>
            </table>
            <!-- <div id='tabla'></div> -->

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
      url: "./controller_quiz1.php",
      data: data,
      success: function (resultado) {
        if (resultado.includes("ingreseNombreValido")) {
            alert('Ingrese Nombre Valido');
        }else{
            if(resultado.includes("ingreseMontoInvalido")){
                alert('Ingrese Monto Valido');
            }else{
                if(resultado.includes('SuperaMontoPermitido')){
                    alert('Superas el monto permitido por producto');
                }
                else{
                    if(resultado.includes('SuperaMontoMax')){
                        alert('el monto total supera el maximo permitido');
                    }else{
                        $("#tabla").html(resultado);
                        document.getElementById('producto').value ='';
                        document.getElementById('monto').value = '';
                    }
                }
            }
        }
      }
    });
  });
});

</script>
</body>
</html>