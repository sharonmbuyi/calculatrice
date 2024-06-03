<?php
require_once('index.php');
$team = new FootballTeam("samy", 11, "Marc", "Salut", "2024-05-31");
echo $team->get_name();


?>