<?php
    require_once "animal.php";
    require_once "ape.php";
    require_once "frog.php";

    $sheep = new Animal("shaun");
    $kera = new Ape("buduk");
    $kodok = new Frog("kera sakti");

    $sheep->Hewan();
    echo "<br>";

    $kera->Hewan();
    echo $kodok->get_jump();
    echo "<br>";
    echo "<br>";
    
    $kodok->Hewan();
    echo $kera->get_yell();

    