<?php

include "DataAccess.php";

$action = $_POST["action"];

if ($action === "vote") {

    $ip = $_SERVER["REMOTE_ADDR"];
    $op = $_POST["radPoll"];
    

    $da = DataAccess::getInstance();
    if ($ip !== "" && $op !== "") {
        if ($da->alreadyVoted($ip) === false) {
            var_dump($da->newVote($op));
            if ($da->newVote($op) === true) {
                echo "Se ha realizado su voto";
                echo "<a href='index.php' value='Volver al inicio'>";
            } else {
                echo "Error voto";
                echo "<a href='index.php' value='Volver al inicio'>";
            }
        } else {
            echo "Ya voto";
            echo "<a href='index.php' value='Volver al inicio'>";
        }
    } else {
        echo "Error datos";
        echo "<a href='index.php' value='Volver al inicio'>";
    }
}
