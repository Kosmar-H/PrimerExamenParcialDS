<?php
    if (isset($_POST["buscar"])){

        $archivo1 = $_FILES["archivo1"]["name"];
        $archivo_copiado1 = $_FILES["archivo1"]["tmp_name"]; // copiamos el archivo1 en un temporal
        $archivo2 = $_FILES["archivo2"]["name"];
        $archivo_copiado2 = $_FILES["archivo2"]["tmp_name"];// copiamos el archivo2 en un temporal

        /*BACKUP del archivo
        $archivo_guardado = "copia_".$archivo;
        if (copy($archivo_copiado ,$archivo_guardado)){
            echo "se copio correctamente el archivo temporal a nuestra carpeta de trabajo";
        }else{
            echo "hubo un error";
        }*/
        if (file_exists($archivo_copiado1)){// verificacion si se subio el primer archivo
            //echo " si existe archivo 1"."<br/>";
            $fp1 = fopen($archivo_copiado1, "r");// abrir el archivo1
            if (file_exists($archivo_copiado2)){// verificacion si se subio el segundo archivo
                //echo " si existe archivo 2"."<br/>";
                //**************************************** *//
                //cuando exista el archivo 1 y 2 pasa esto!!!
                //**************************************** *//
                $xlista=$_POST['lista']; // segun la opcion que tomemos en la interfaz 
                if($xlista=='opcion1'){
                    //Mostrar alumnos que no seran tutorados en 2022-I porque no estan matriculados
                    // Formulario
                    ?>
                    <table width="70%" border="0" align="center">
                                <tr  bgcolor="#012d4b">
                                    <td width="10%" align="center" ><b>Código</b></td>
                                    <td width="20%" align="center" ><b>Nombres</b></td>
                                    <td width="20%" align="center"><b>Descripcion</b></td>
                                </tr>
                    <?php
                    while ($datos_1 = fgetcsv($fp1, 0, ",")){ //obtenemos datos del primer csv por filas
                        $EstadoAlumno=(boolean)false; // variable booleana igual a "false"
                        $fp2 = fopen($archivo_copiado2, "r");// abrir el archivo2
                        while ($datos_2 = fgetcsv($fp2, 0, ",")){//obtenemos datos del segundo csv por filas
                            if ($datos_1[0]==$datos_2[1]){ // comparamos los codigos del archivo1 y los del archivo2
                                $EstadoAlumno=(boolean)true;// si se repite estadoalumno se vuelve true
                                break;
                            }
                        }
                        if ($EstadoAlumno==(boolean)false && $datos_1[5]!= "" && (integer)$datos_1[0]){//si estado no cambia a false y no son alumnos nuevos y la primera columna es entera
                            ?>
                                <tr>
                                    <th><?php  echo $datos_1[0]?></th>
                                    <th><?php  echo $datos_1[1]?></th>
                                    <th><?php  echo '#N/A'?></th>
                                </tr>
                            <?php
                        }
                        fclose($fp2);// cerramos el archivo2
                    }    
                    ?>
                    </table>
                    <?php
                }elseif($xlista=='opcion2'){
                    //Mostrar nuevos alumnos(ya sea porquer se esta reincorporando desde antes de tutoria o que sea cachimbo) para tutoria 2022-I
                    // Formulario
                    ?>
                    <table width="70%" border="0" align="center">
                                <tr  bgcolor="#012d4b">
                                    <td width="10%" align="center" ><b>Código</b></td>
                                    <td width="20%" align="center" ><b>Nombres</b></td>
                                    <td width="20%" align="center"><b>Descripcion</b></td>
                                </tr>
                    <?php
                    while ($datos_1 = fgetcsv($fp1, 0, ",")){//obtenemos datos del primer csv por filas
                        $EstadoAlumno=(boolean)false;// variable booleana igual a "false"
                        $fp2 = fopen($archivo_copiado2, "r");// abrir el archivo2
                        while ($datos_2 = fgetcsv($fp2, 0, ",")){//obtenemos datos del segundo csv por filas
                            if (($datos_1[0]==$datos_2[1]) && ($datos_1[5]=="")){// si se encuentra el codigo del primero archivo en el segundo y es un alumno nuevo 
                                $EstadoAlumno=(boolean)true; // el estado se vuelve verdadero
                                break;
                            }
                        }
                        if ($EstadoAlumno==(boolean)true){ // si el estado es verdadero imprime
                            ?>
                                <tr>
                                    <th><?php  echo $datos_1[0]?></th>
                                    <th><?php  echo $datos_1[1]?></th>
                                    <th><?php  echo 'Nuevo tutorado'?></th>
                                </tr>
                    
                            <?php
                        }
                        fclose($fp2);// cerramos el archivo2
                    }
                    ?>
                    </table>
                    <?php //final del formulario
                }elseif($xlista=='opcion3'){
                    //alumnos con tutores 2022-I
                    // Formulario
                    ?>
                    <table width="70%" border="0" align="center">
                                <tr  bgcolor="#012d4b">
                                    <td width="10%" align="center" ><b>Código</b></td>
                                    <td width="20%" align="center" ><b>Nombres</b></td>
                                    <td width="20%" align="center"><b>Matriculados con tutor</b></td>
                                </tr>
                    <div class="scroll_form">
                    <?php
                    while ($datos_1 = fgetcsv($fp1, 0, ",")){//obtenemos datos del primer csv por filas
                        $EstadoAlumno=(boolean)false;// variable booleana igual a "false"
                        $fp2 = fopen($archivo_copiado2, "r");// abrir el archivo2
                        while ($datos_2 = fgetcsv($fp2, 0, ",")){//obtenemos datos del segundo csv por filas
                            if (($datos_1[0]==$datos_2[1]) && ($datos_1[5]!="")){//si se repite un codigo del primer archivo en el segundo y no es un alumno nuevo
                                $EstadoAlumno=(boolean)true; // estado es verdadero
                                break;
                            }
                        }
                        if ($EstadoAlumno==(boolean)true){ //si estado es verdadero imprime 
                            ?>
                                <tr>
                                    <th><?php  echo $datos_1[0]?></th>
                                    <th><?php  echo $datos_1[1]?></th>
                                    <th><?php  echo $datos_1[5]?></th>
                                </tr>
                
                            <?php
                            
                        }
                        fclose($fp2);// cerramos el archivo2
                    }
                    ?>
                    </div>
                    </table>
                    <?php //final del formulario
                }
            }else{
                //echo "no se subio ningun archivo en la segunda ranura"."<br/>";
            }
        }else{
            //echo "no se subio ningun archivo en la primera ranura"."<br/>";
            if (file_exists($archivo_copiado2)){
                //echo "se subio archivo en la segunda ranura correctamente"."<br/>";
            }else{
                //echo "no se subio ningun archivo en la segunda ranura"."<br/>";
            }
        }  
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" type = "text/css" href="estilo.css">
    <title>Subir archivo</title>
</head>
    <body>
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
    </body>
</html>
<body>
<main id="contenedor">
    <div class="form">
        <form action="index.php" class="formulariocompleto" method = "post" enctype = "multipart/form-data">
            <header><h1>Formulario Tutoria UNSAAC</h1></header>
            <p>Subir archivos CSV</p>
            <label>Distribucion de docentes de tutoria:</label><br>
                <input type ="file" name="archivo1" class="form-control"/><br><br> 
            <label>matriculados general:</label><br>
                <input type ="file" name="archivo2" class="form-control"/><br><br>
            <label>Buscador:</label> <br>
                    <div class="content-select">
                            <select name="lista">
                                <option value = "opcion1">Mostrar alumnos que no seran tutorados </option>
                                <option value = "opcion2">Mostrar nuevos alumnos para tutoria </option>
                                <option value = "opcion3">Mostrar alumnos con tutores </option>
                            </select>
                        <i></i>
                    </div>
                        <br>
                        <br>
            <input type="submit" value ="BUSCAR" name = "buscar"/>
            <h2 align="center"><strong>Formulario</strong></h2>
            
        </form>
    </div>
</main>
</body>
</html>