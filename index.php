<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CEP</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TCEP">Digite seu CEP </h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="cep" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['cep'])){
      $cep = $_POST['cep'];
      $UDigitos = substr($cep, 5,8);

        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>
        Ultimos 3 digitos do seu CEP são: $UDigitos </p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>