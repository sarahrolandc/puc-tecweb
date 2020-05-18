<?php
include('produto.php');

$productList = array();
array_push($productList, new Product(1, 'Lápis', 150, 0.50));
array_push($productList, new Product(2, 'Borracha', 175, 1.50));
array_push($productList, new Product(3, 'Caneta', 100, 1.00));
array_push($productList, new Product(4, 'Apontador', 85, 2.50));
array_push($productList, new Product(5, 'Tesoura', 55, 7.50));

$valorTot = 0;
foreach ($productList as $prod) {
    $valorTot += $prod->final_price;
}

?>

<html>

<head>
    <title>Questão 4</title>
    <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Valor Unitário</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productList as $prod) : ?>
                <tr>
                    <td><?php echo $prod->code; ?></td>
                    <td><?php echo $prod->name; ?></td>
                    <td><?php echo $prod->quantity; ?></td>
                    <td><?php echo $prod->price; ?></td>
                    <td><?php echo $prod->final_price; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Total Geral:</td>
                <td><?php echo $valorTot; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>