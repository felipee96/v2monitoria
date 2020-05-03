<?php

use App\User;
use App\Model\registroEstudiante;
use App\Model\registromonitor;
use App\Model\reportarFalla;
use App\Model\perdida;


function nombreMonitor (){
    $nombreMonitor = User::all();
    return $nombreMonitor;
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