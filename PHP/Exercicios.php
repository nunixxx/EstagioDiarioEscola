<?php
echo ('1 Utilizando a variável $arrayDeClientes de um echo no nome do segundo cliente');

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];
?>
    <br>
    <?php
echo ("\n".$arrayDeClientes[1]->nome);

?>
<br><br>

<?php

echo('2) Utilize a estrutura de dados $arrayDeNascimento para adicionar na estrutura $arrayDeClientes a data de nascimento de cada cliente.');
?>
    <br>
    <?php

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
    ];

    foreach ($arrayDeNascimento as $nome => $nascimento){
        $existe = false;
        foreach($arrayDeClientes as $cliente){
            if($cliente->nome == $nome){
                $existe = true;
                break;
            }
        }

        if(!$existe){
            $cliente = new stdClass();
            $cliente->nome = $nome;
            $arrayDeClientes[] = $cliente;
        }
    }

    foreach ($arrayDeClientes as $cliente) {
        $nome = $cliente->nome;
        if (isset($arrayDeNascimento[$nome])) {
            $cliente->nascimento = $arrayDeNascimento[$nome];
        }
    }
    for($i = 0; $i<count($arrayDeClientes) ; $i++){
        echo ("\n".$arrayDeClientes[$i]->nome);
        
        echo ("   " . $arrayDeClientes[$i]->nascimento);
        ?>
    <br>
    <?php

    }

?>

<br><br>
<?php

echo('3) Faça a ordenação e impressão da estrutura $arrayDeClientes resultante do exercício 2 pela data de nascimento (pode ser ascendente ou descendente).');
?>
    <br>
    <?php
$a = $cliente;
$cont = 0;
foreach($arrayDeClientes as $cliente){
    $arrayDeClientes[$cont]->nascimento = DateTime::createFromFormat('d-m-Y', $cliente->nascimento);
    $cont = $cont + 1;
}
for($i = 0; $i<count($arrayDeClientes) ; $i++)
{
    for ($j = $i + 1; $j < count($arrayDeClientes); $j++)
    {
        if ($arrayDeClientes[$i]->nascimento > $arrayDeClientes[$j]->nascimento)
        {
            $a =  $arrayDeClientes[$i];
            $arrayDeClientes[$i] = $arrayDeClientes[$j];
            $arrayDeClientes[$j] = $a;
        }
    }
}
for($i = 0; $i<count($arrayDeClientes) ; $i++){
    
    echo ("\n".$arrayDeClientes[$i]->nome . " nascido em ");
    
    echo $arrayDeClientes[$i]->nascimento->format('Y-m-d');
    ?>
    <br>
    <?php
}
?>