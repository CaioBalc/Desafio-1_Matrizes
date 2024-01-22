<?php

$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pokemons = json_decode(file_get_contents($url));
file_put_contents("pokemons.txt", var_export($pokemons, true));


var_dump($pokemons)
?>