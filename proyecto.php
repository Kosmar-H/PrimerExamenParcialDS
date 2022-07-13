<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type = "text/css" href="estilo.css">
    <title>Proyecto Aporte 1</title>
</head>
    <body>
        <main id="contenedor">
            <div class= form>
            
                <form name ="frmSubirCSV" id="frmSubirCSV" method = "post" enctype = "multipart/form-data">
                    <header><h1>Formulario Tutoria UNSAAC</h1></header>
                    <p>Subir archivos CSV</p>
                    <label>Alumnos antiguos:</label><br>
                    <Input type = "file" name="nuevos_csv" id="archivo_csv">
                    <Input type = "submit" name="submit1" value = "subir archivo"> <br> <br>
                    <label>Alumnos matriculados 2022-1:</label> <br>
                    <Input type = "file" name="matriculados_csv" id="archivo_csv">
                    <Input type = "submit" name="submit2" value = "subir archivo"> <br><br>
                    <label>Buscador:</label> <br>
                    <select>
                        <option value = "opcion1">Mostrar alumnos que no seran tutorados en 2022-I </option>
                        <option value = "opcion2">Mostrar nuevos alumnos para tutoria </option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value ="Buscar" name = "Buscar"/>
                    <h2> Formulario </h2>
                    

                </form>
            </div>
        </main>
    </body>
</html>