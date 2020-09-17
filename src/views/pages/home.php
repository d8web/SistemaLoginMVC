<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="pagina-inicial">
            <h1>Bem vindo(a) <?=$loggedUser->name;?>.</h1>
            <a href="<?=$base;?>/logout">Sair</a>
        </div>
    </div>

</body>
</html>