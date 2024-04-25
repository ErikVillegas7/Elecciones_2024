<?php
    include('db.php');

    $DNI=$_POST['dni'];
    $NAME=$_POST['name'];
    $EMAIL=$_POST['email'];
    $SURNAME=$_POST['surname'];



    $consulta = "SELECT * FROM alumno where dni ='$DNI' and name = '$NAME' and email = '$EMAIL' and  surname = '$SURNAME'";
    $resultadoo = mysqli_query($conexion,$consulta);

    $fila = mysqli_num_rows($resultadoo);

    if($fila){
        header("location:home.html");

    }
    else{
        include("index.html");
        ?>
        <script>
            alert('error verifique los datos')
        </script>
        <?php
    }
    mysqli_free_result($resultadoo);
    mysqli_close($conexion);
?>