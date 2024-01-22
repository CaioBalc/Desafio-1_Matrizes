<?php

/*
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$qtd_registros = 3;

$indice = ($pagina - 1) * $qtd_registros;
*/

$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pokemons = json_decode(file_get_contents($url));
file_put_contents("pokemons.txt", var_export($pokemons, true));

/*
$pokemons = array_map(function($nome, $url) {
    return $nome, $url;
}, $nome, $url);
/*

    for($i = 1; $i <= $qtd_registros; $i++){
        var_dump($nome, $url);
        echo '<br>';
        if($i >= $qtd_registros){
            echo "Fim da aplicação";
        }
    }


/*
for ($i = 1; $i <= $total_pag; $i++) {
    echo "<a href='?pagina={$i}'>{$i}</a>";
    echo ' | ';
}
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API-Pokémon</title>
</head>
<body>

<!--
    <div class="container">
        <h2>Pokémons</h2>
        <span id="conteudo"></span>
    </div>

    <script>
        var qtn_result_pg = 15;
        var pagina = 1;
        $(document).ready(function (){
            listar_pokemon(pagina, qnt_result_pg);
        });

        function listar_pokemon(pagina, qnt_result_pg){
            $.post("listarPokemons.php", function(retorna){
                $("#conteudo").html(retorna);
            });
        }
    </script>
-->

</body>
</html>