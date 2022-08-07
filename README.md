## **<center> Grupo 5: Primer Parcial de Desarrollo de Sofware I  </center>**
### Datos Académicos

- **Universidad:** Universidad Nacional de San Antonio Abad del Cusco
- **Facultad:** Facultad de Ingeniería Eléctrica, Electrónica, Informática y Mecánica
- **Escuela Profesional:** Ingeniería Informática y de Sistemas

### Docente:
- **Quintanilla Portugal Roxana Lisette** [Roxana](https://github.com/nitanilla "Roxana")

### Tema:
 ****Asistente de Tutoría - Informática****

### Colaboradores:
- [Andrés]() **Rodrigo Andía Jaén**
- [Kosmar](https://github.com/Kosmar-Hu) **Hugo Carbajal Laura** 
- [Gabriela](https://github.com/gabrielafarfan1) **Farfan Enriquez** 
- [Marco](https://github.com/MarcoAntonioHL) **Antonio Huaman Lonconi**
- [Roger](https://github.com/150406) **Sanga Monrroy** 
- [Pamela](https://github.com/Alema2) **Aracely Villalobos Quispe** 
- [Marcelo](https://github.com/MarceloVizcarra) **Angelo Vizcarra Vargas**
---
### Implementado en:
- Lenguaje:  PHP, CSS

### Herramientas:
- XAMPP [XAMPP](https://www.apachefriends.org/es/index.html)
- Github, Git
- Visual Code

## Introducción:
El proyecto de Asistente de Tutoria nace a partir de una examen del curso de Desarollo de Sofware I, en el cual se pone en práctica lo aprendido en las clases de teoría y de laboratorio, para el cual se utilizó XAMPP  y Github.

## Requisitos:
- Es recomendable tener conocimientos previos o manejo de archivos CSV.
- Un ordenador con conexión a internet para poder instalar todo el software y descargar el material.
- Es recomendable contar con conocimientos básicos de programación en PHP.
- Guardar la carpeta en htdocs de XAMPP e iniciar APACHE.

## Descripción
Bienvenidos al repositorio de "Grupo 5" te invitamos a que revises el código. Este es un proyecto que permite comparar los elementos de archivos CSV. Para ello debemos subir un archivo que contenga la relación de alumnos matriculados en el semestre actual, otro archivo que contenga la lista de docentes para el presente semestre y otra que contenga la distribución de tutorías del semestre anterior. Luego comparar los elementos de ambos archivos segun lo que queramos obtener (relación de alumnos que no serán tutorados en el semestre actual o  la distribución balanceada de tutorías para el presente semestre), nos mostrara dicha relación y los almacenara en archivos CSV.
### Documentación
- Empezamos evaluando los archivos CSV y como trabajar con ellos en PHP
- Investigamos más sobre como subir archivos CSV a un formulario.
-	Cambiamos el diseño del formulario.
- Revisamos el pseudocodigo que nos fue asignado para adaptarlo a nuestro proyecto
-	Implementamos las funciones que nos permitian subir archivos CSV.
- Adaptamos el programa para almacenar los datos optenidos en un archivo CSV
### Trabajo - Guía:
- Utilizamos XAMPP para ver la interface del formulario
- Utilizamos 2 inputs de tipo file para poder almacenar temporalmente los archivos csv.
- Al tener los 3 archivos correctamente seleccionados procederemos a seleccionar unas de las 2 opciones que tenemos.
- La primera opcion nos mostrara los alumnos que no seran tutorados y guardara la lista en un archivo CSV
- La segunda opcion nos mostrara la distribución balanceada de tutorías para el presente semestre y lo almacenara en un archivo CSV
- Al apretar el boton "Crear CSV" nos aparecera un formulario diferente dependiendo de la opcion que se seleccione.
- (despues de darle a buscar se tiene que volver a ingresar los archivos para una nueva busqueda porque el programa trabaja con archivos temporales).
