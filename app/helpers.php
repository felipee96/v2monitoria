<?php

use App\User;

function nombreMonitor (){
    $nombreMonitor = User::all();
    return $nombreMonitor;
}

?>