<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="bordered">
    <tr class="font-12">
        <th style="width: 10">N-Venda</th>
        <th style="width: 100px">Nome produto</th>
        <th style="width: 25px">Preço</th>
    </tr>

    @foreach($venda['vendaItens'] as $venda)
    <tr>
        <td style="width: 10px">{{ ($venda['id']) }}</td>
        <td style="width: 100">{{ ($venda['nome_produto']) }}</td>
        <td style="width: 100">{{ number_format($venda['preco_produto'], 2,',','.') }}</td>
    </tr>
    @endforeach
</table>
    
</body>
</html>