<?php
require_once('ClasesDAO/Conexion.php');
require_once('ClasesDAO/Login.php');
require_once('ClasesDAO/ClienteDAO.php');
require_once('ClasesDAO/OperarioDAO.php');
require_once('ClasesDAO/Metodo_PagoDAO.php');
require_once('ClasesDAO/FondosDAO.php');
require_once('ClasesDAO/PlazasDAO.php');
require_once('ClasesDAO/NormatividadDAO.php');
$conex = Conexion::conexion();
$login = new Login();
$clientedao = new ClienteDAO();
$operariodao = new OperarioDAO();
$metodo_pagodao = new Metodo_PagoDAO();
$fondosdao = new FondosDAO();
$plazasdao = new PlazasDAO();
$normatividaddao = new NormatividadDAO();
?>