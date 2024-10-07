<?php

$nome = "Miguel Barros";
$idade = 16;
$tema = "";
// $tema2 = "background-color: white; color: blue;";

if($idade >= 18){$imagem = "maior18.jpg";}
else{$imagem = "bob.jpg";}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 113.4</title>
    <style>
        body{
            background-color:<?php echo $tema; ?>;
            color: green;
            text-align:center;
        }
    </style>

</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>

    
    <p>
        CRIANÇA ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
        Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
        recusandae error ullam similique fugit deserunt voluptatem culpa quo. <br><br>
        <button>MENORES DE 18 ANOS</button>
    </p>

    <p>
        CRIANÇA ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
        Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
        recusandae error ullam similique fugit deserunt voluptatem culpa quo.
    </p>

    <p>
        CRIANÇA ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
        Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
        recusandae error ullam similique fugit deserunt voluptatem culpa quo.
    </p>

    <p>
        CRIANÇA ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
        Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
        recusandae error ullam similique fugit deserunt voluptatem culpa quo.
    </p>
    
    <img src= "<?php echo $imagem; ?>" alt="imagem_idade" style="width:300px";>
       
    <?php if($idade >= 18):?> 
        <p>
            ADULTO ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
            Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
            recusandae error ullam similique fugit deserunt voluptatem culpa quo. <br><br>
            <button>MAIORES DE 18 ANOS</button>
        </p>
        
        <p>
            ADULTO ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
            Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
            recusandae error ullam similique fugit deserunt voluptatem culpa quo.
        </p>

        <p>
            ADULTO ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
            Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
            recusandae error ullam similique fugit deserunt voluptatem culpa quo.
        </p>

        <p>
            ADULTO ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit.
            Expedita ipsum placeat, illo eum in esse pariatur dicta dolorum asperiores 
            recusandae error ullam similique fugit deserunt voluptatem culpa quo.
        </p>
    <?php endif;?>

</body>
</html>

