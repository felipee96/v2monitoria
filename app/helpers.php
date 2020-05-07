<?php

use App\User;
use App\Model\registroEstudiante;
use App\Model\registromonitor;
use App\Model\reportarFalla;
use App\Model\perdida;
use App\Model\programa;
use App\Model\semestre;
use App\Model\sala;
use App\Model\horario;
use App\Model\equipo;
use App\Model\sede;


function nombrePrograma (){
    $users = programa::all();
    return $users;
}

function sede (){
    $users = sede::all();
    return $users;
}

function sala (){
    $users = sala::all();
    return $users;
}

function horario (){
    $users = horario::all();
    return $users;
}

function equipo (){
    $users = equipo::all();
    return $users;
}

function semestre (){
    $users = semestre::all();
    return $users;
}

function verEstudiate(){
    $users = registroEstudiante::all();
    return $users;        
}
function verMonitor(){
    $users = registromonitor::all();
    return $users;        
}
function verFalla(){
    $users = reportarFalla::all();
    return $users;        
}
function verPerdida(){
    $users = perdida::all();
    return $users;        
}
?>