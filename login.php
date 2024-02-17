<html>
<head>
    <title>Red social login</title>
</head>
<body>
    <?php
        $usuario = $_GET['usuario'];
        $clave = $_GET['clave'];
        if($usuario == 'jose'){
            if($clave == 'jose123.'){
                echo "<h1>BIENVENIDO</h1>";
            }else{
                echo "La clave es invalida"
            }
        }else {
            echo "<b>el usuario no es valido</body>";
        }

        echo "<h2>La suma es  $suma</h2>";
    ?>
    <h1>LOGIN DE USUARIO</h1>
    <form action= "/">

        usuario<input type="text" name="usuario"><br>
        Password<input type="password" name="password" /><br />
        <input type="submit" value="login" />
    </form>

</body>
</html>