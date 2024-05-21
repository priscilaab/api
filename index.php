<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="mb-3">Listar Produtos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Fabricante</th>
                    <th>Estoque</th>
                    <th>Código de Barras</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody id="corpo_tabela">
                <tr>
                    <td>nome</td>
                    <td>fabricante</td>
                    <td>estoque</td>
                    <th>cod_barras</th>
                    <th>preco</th>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function obterProduto(){
            const url = "endpoints/listar.php";
            fetch(url).then((resposta) => {
                return resposta.json();
            }).then((resposta) => {
                console.log(resposta);
                corpo_tabela.innerHTML = "";
                for (const cont in resposta) {
                    corpo_tabela.innerHTML += `
					<tr>
						<td>${resposta[cont].nome}</td>
						<td>${resposta[cont].fabricante}</td>
						<td>${resposta[cont].estoque}</td>
                        <td>${resposta[cont].cod_barras}</td>
                        <td>${resposta[cont].preco}</td>
					</tr>
					`;
                }
            })
        }
        document.addEventListener('DOMContentLoaded', obterProduto);
    </script>
</body>

</html>