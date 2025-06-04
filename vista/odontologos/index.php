<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 'odontologo') {
    header("Location: ../inicio_sesion.php");
    exit();
}
echo "<h2>Panel del Odontólogo - " . $_SESSION['usuario']['nombre'] . "</h2>";
// Aquí se mostraría su agenda, pacientes, etc.
?>
