<?php
echo '<!DOCTYPE html>';
echo '<!--';
echo 'To change this license header, choose License Headers in Project Properties.';
echo 'To change this template file, choose Tools | Templates';
echo 'and open the template in the editor.';
echo '-->';
echo '<html>';
echo '<head>';
echo '<title>Registro de Usuarios</title>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link href="./css/style.css" rel="stylesheet">';
echo '';
echo '<script src="JS/validacion.js" ></script>';
echo '</head>';
echo '<body>';
echo '<div class="container">';
echo '';
echo '<div class="containerRegistro">';
echo '<marquee direction="right" ><h1>SILVA JUAREZ ALEJANDRO 4IV8</h1></marquee>';
echo '<hr>';
echo '<h2>REGISTRAR USUARIO</h2>';
echo '<form name="formulario" method="get"';
echo 'action="Registro" onsubmit="return validare(formulario)">';
echo '<label>Nombre:</label>';
echo '<input type="text" name="nombre" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Apellido Paterno:</label>';
echo '<input type="text" name="appat" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Apellido Paterno:</label>';
echo '<input type="text" name="appmat" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Edad:</label>';
echo '<input type="number" name="edad" min="01" max="99" size="2" onkeypress="return validarn(event)">';
echo '<br>';
echo '<label>Correo</label>';
echo '<input type="email" name="correo" onkeypress="return validarcR(event)">';
echo '<br>';
echo '<br>';
echo '<input type="submit" class="aceptar" value="Registrar de Usuario">';
echo '<input type="reset" class="resetear" value="Borrar Registro">';
echo '</form>';
echo '</div>';
echo '<br>';
echo '<hr>';
echo '<div class="containerConsulta">';
echo '<br>';
echo '<h2>CONSULTAR USUARIOS</h2>';
echo '<form method="get" name="consultarregistro" action="Consultar">';
echo '<input type="submit" class="aceptar" value="Consultar Tabla de Usuarios" >';
echo '</form>';
echo '</div>';
echo '<br>';
echo '<hr>';
echo '<div class="containerEliminar">';
echo '<br>';
echo '<h2>BORRAR USUARIO</h2>';
echo '<form method="post" name="formularioeliminar" action="Eliminar">';
echo '<label>ID del Usuario a Eliminar</label>';
echo '<input type="number" name="ideliminar" onkeypress="return validarn(event)">';
echo '<br>';
echo '<br>';
echo '<input type="submit" class="aceptar" value="Eliminar Usuario">';
echo '</form>';
echo '</div>';
echo '<br>';
echo '<hr>';
echo '<div class="containerActualizar">';
echo '<br>';
echo '<h2>MODIFICAR USUARIO</h2>';
echo '<form method="post" name="actualizarregistro" action="Actualizar">';
echo '<label>ID del Usuario a Actualizar</label>';
echo '<input type="number" name="idactualizar">';
echo '<br>';
echo '<label>Nombre:</label>';
echo '<input type="text" name="nombre_a" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Apellido Paterno:</label>';
echo '<input type="text" name="appat_a" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Apellido Paterno:</label>';
echo '<input type="text" name="appmat_a" onkeypress="return validarp(event)">';
echo '<br>';
echo '<label>Edad:</label>';
echo '<input type="number" name="edad_a" min="01" max="99" size="2" onkeypress="return validarn(event)">';
echo '<br>';
echo '<label>Correo</label>';
echo '<input type="email" name="correo_a" onkeypress="return validarcA(event)">';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<input type="submit" class="aceptar" value="Actualizar Usuario">';
echo '<input type="reset" class="resetear" value="Borrar Datos" >';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>