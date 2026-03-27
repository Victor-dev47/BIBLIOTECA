<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <?php
    include("menu.php");
    ?>
    <div class="content">
        <div class="card">
            <h2>Cadastro de Novo Livro</h2>
            <p>Adicione uma nova obra ao acervo digital da biblioteca. Preencha as informações abaixo e envie a capa e o
                arquivo digital do livro em formato pdf.</p>
            <br>
            <form action="" method="post">
                <label> Título do livro</label>
                <input type="text" name="titulo" required>
                <label> Autor</label>
                <input type="text" name="autor" required>
                <label> Ano de publicação </label>
                <input type="number" name="ano" required>
                <label> Categoria </label>
                <select name="categoria" required>
                <option value="">Selecione...</option>
                <option>Romance</option>
                <option>Literatura brasileira</option>
                <option>Fantasia</option>
                <option>Ficção científica</option>
                <option>Educação</option>
                <option>Tecnologia</option>
                <option>História</option>
                <option>Biografia</option>
                <option>Infantil</option>
 
 
                </select>
                <br><br>
                <label>Capa do livro (Imagem)</label>
                <input type="file" name="arquivo" accept="application/pdf" required>
                <br>
                <button class="btn">Cadastrar livro</button>
 
 
            </form>
        </div>
    </div>
</body>
 
</html>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <?php
    include("menu.php");
    ?>
    <div class="content">
        <h1>Biblioteca Digital Municipal</h1>
        <p>A biblioteca digital municipal tem como missão promover o acesso ao conhecimento, à
            cultura e a educação por meio de um acervo digital acessível a toda comunidade. </p>
 
        <br>
        <p>Nosso sistema permite consultar obras literárias, acessar livros digitais e incentivar a leitura através da
            tecnologia.
            Este ambiente foi desenvolvido para facilitar o gerenciamento do acervo bibliografo
            e aproximar os leitores do universo literário.
        </p>
        <img src="https://img.freepik.com/vetores-gratis/biblioteca-interior-sala-vazia-para-ler-com-livros-nas-prateleiras-de-madeira_33099-1722.jpg%22
            alt="Imagem de uma biblioteca" style="width: 100%; border-radius:12px ;">
    </div>
 
 
</body>
 
</html>
 