 <?php 
    include "koneksi.php";

        if ($_SESSION['userweb'] == ""){
            header ("location:H.login.php");
        }
?> 
<html>
    <head>
    <link href="register.css" type="text/css" rel="stylesheet">
        <title>halaman admin</title>
    </head>
    <body>
        ini halaman admin <a href="keluar.php">metuo su!</a>
    </body>
</html>