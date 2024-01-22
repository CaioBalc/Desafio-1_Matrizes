<?php

$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pokemons = json_decode(file_get_contents($url));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API-Pokémon</title>
</head>
<body>
    <?php var_dump($pokemons);?>
</body>
</html>