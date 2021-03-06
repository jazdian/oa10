<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{Optica Aristos}}</title>
    <link rel="stylesheet" href="">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="../oa10/assets/css/estilos.css">
    <!--
    <link rel="stylesheet" href="../oa10/assets/css/materialize.min.css">
    -->

</head>
<body>

    <?php echo $home->CreateNavBar(); ?>

    <?php // Esta función muestra la pagina según las rutas
    echo $home->RouterOutlet(); ?>

    <?php echo $home->CreateFooter(); ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <!--<script src="../oa10/assets/js/jquery.min.js"></script>
    <script src="../oa10/assets/js/materialize.min.js"></script>-->
    
    <script src="../oa10/assets/js/funciones.js"></script>

</body>
</html>
