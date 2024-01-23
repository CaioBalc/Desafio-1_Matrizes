<?php

$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
if(!file_exists("pokemons.txt")){
    $pokemons = json_decode(file_get_contents($url));
    file_put_contents("pokemons.txt", $pokemons->results);
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$pokemons = json_decode(curl_exec($ch));

#Pesquiar:
fopen()
fwrite()

foreach($pokemons->results as $postar){
    #echo "name: " . $postar->name . "<br>";
    #echo "<hr>";
    print_r("<br>url: $postar->url");
    print_r("<br>name: $postar->name");
    #print_r("<br><img src = $postar->img /><hr>");
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == $limite) {
        echo $i;
    } else {
        echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
    }
}
#var_dump($pokemons);

$teste = file("/pokemons.txt", "w");

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$limite = 15;

$indice = ($limite * $pagina) - $limite;

$quantidade_pg = 10;


$pg = array_slice($pokemons, $indice, $limite);
#var_dump($pg);


/*
echo "<br>";
echo "<a href='index.php?pagina=1'>Primeira</a>";
*/

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
    <div class="paginacao">
        <?php for ($i = 1; $i <= ceil(150/ $limite); $i++) : ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
    <!--
    <ol>
        <?php #oreach($pokemons as $id): ?>
            <li><?=$id["id"]?></li>
        <?php #endforeach; ?>
    </ol>
    -->
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