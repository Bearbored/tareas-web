<!DOCTYPE html>

<html>
    <!-- enlace del archivo CSS style a nuestra página -->
    <head>
        <link rel="stylesheet" href="style.css">
        <title>CV 2020</title>
    </head>

    <!-- cuerpo de laa página -->
    <body>
        <!-- encabezado de la página -->
        <h1>Rellena tu CV</h1>
        <!-- formulario solicitado -->
        <form action="page1.php" method="POST">
            <!-- seccion [datos] -->
            <p>Nombres</p>
            <input type="text" id="inputname" name="textname" size="45">
            <p>Apellidos</p>
            <input type="text" id="inputlastname" name="textlastname" size="45">
            <p>DNI</p>
            <input type="text" id="inputdni" name="textdni">
            <p>Titulo</p>
            <input type="text" id="inputtitulo" name="texttitulo">
            <p>Telefono</p>
            <input type="text" id="inputtef" name="texttel">
            <p>Email</p>
            <input type="text" id="inputemail" name="textemail">
            <p>Perfil Profesional (Descripcion)</p>
            <input type="text" id="inputpro" name="textpro" size="70">
            <p>Perfil de LinkedIn (URL)</p>
            <input type="text" id="inputlinked" name="textlinked" size="70">
            <p >Experiencia Laboral 1
            <br>
            <a>Cargo</a><br><input type="text" id="inputexp1cargo" name="textexp1cargo" size="15"><br>
            
            <a>Lugar</a><br><input type="text" id="inputexp1lugar" name="textexp1lugar" size="15"><br>
            
            <a>Fecha Inicio </a><input type="text" id="inputexp1inicio" name="textexp1inicio" size="9"><br><a>Fecha Termino </a><input type="text" id="inputexp1final" name="textexp1final" size="9">
            </p>
            <p >Experiencia Laboral 2
            <br>
            <a>Cargo</a><br><input type="text" id="inputexp2cargo" name="textexp2cargo" size="15"><br>
            
            <a>Lugar</a><br><input type="text" id="inputexp2lugar" name="textexp2lugar" size="15"><br>
            
            <a>Fecha Inicio </a><input type="text" id="inputexp2inicio" name="textexp2inicio" size="9"><br><a>Fecha Termino </a><input type="text" id="inputexp2final" name="textexp2final" size="9">
            </p>
            
            <!-- seccion [acciones de botones] -->
            <input type="submit" class="cajon" id="miboton" name="buttonsavename" value="Generar CV">
        </form>
    </body>
</html>