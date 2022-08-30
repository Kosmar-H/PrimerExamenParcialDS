<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" type = "text/css" href="estilo.css">
    <title>Subir archivo</title>
</head>
    <tbody>
        <header class="bg_animate">
            <section class="banner contenedor">
                <secrion class="banner_img1">
                        <img src="us.png" alt="">
                </secrion>
                <div class="banner_img">
                    <img src="iis.png" alt="">
                </div>
            
            </section>

            <div class="burbujas">
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
            </div>
        </header>
    </tbody>
<body>
    <main id="contenedor">
        <div class="form">
            <form class="formulariocompleto" method = "post" enctype = "multipart/form-data" action="conexion.php">
                <header><h1>Formulario Tutoria UNSAAC</h1></header>
                <p>Subir archivos CSV</p>
                <label>Lista de alumnos matriculados en el presente semestre:</label><br>
                    <input type ="file" name="archivo_alumnos" class="form-control"/><br><br> 
                <label>Lista de docentes para el presente semestre:</label><br>
                    <input type ="file" name="archivo_docentes" class="form-control"/><br><br>
                <label>Distribución de tutorías del anterior semestre:</label><br>
                    <input type ="file" name="archivo_distribucion" class="form-control"/><br><br>
                <label>Buscador:</label> <br>
                        <div class="content-select">
                                <select name="opciones">
                                    <option value = "opcion1">Archivo CSV Lista de alumnos ya no son considerados en la tutoría </option>
                                    <option value = "opcion2">Archivo CSV Distribución balanceada de tutorías para el presente semestre </option>
                                </select>
                            <i></i>
                        </div> <br><br>                     
                <input type="submit" value ="CREAR CSV" name = "buscar"/>  
            </form>
        </div>
    </main>
</body>
</html>