<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            input{
                margin-bottom:0.5% ;
                margin-top:0.5% ;
                display: inline-block;
            }
            h1{
                font-family: arial;
                background-color:lightblue ; 
                padding : 15px;
                display: inline-block;
                border-radius: 10px
            }
            p{
                font-size:20px ;
                font-family:arial;
                margin-bottom:0px; 
                display: inline-block;
            }
            body{
                text-align:center ;
            }
            form{
                background-color:lightcyan;
                display: inline-block;
                padding:1%;
                border-radius: 20px;
                
            }
            h2{
                font-family:arial ;
               display: inline-block;
            }
            input{
                border: solid 1px black;
                    border-radius:5px ;
            }
                  </style>
        <form method="post">
            <h1>Venda de Produtos 💸</h1>
            <br>
            <p for="fname" >Codigo:</p><br>
            <input type="text" id="codigo" name="codigo"><br>
            <input type="submit" value="Enviar"><br>
            <p for="fname" >Nome:</p><br>
            <input type="text" id="nome" name="nome"><br>
            <input type="submit" value="Enviar"><br>
            <p for="fname" >Quantidade:</p><br>
            <input type="text" id="qtde" name="qtde"><br>
            <input type="submit" value="Enviar"><br>
            <p for="fname" >Valor:</p><br>
            <input type="text" id="valor" name="valor"><br>
            <input type="submit" value="Enviar"><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $qtde = $_POST["qtde"];
        $valor = $_POST["valor"] ;
        echo "<h2>PDV</h2>";
        $vlrtotal = $valor * $qtde;
        echo "<br>Valor Total é igual a $vlrtotal";
        }
        ?>
    </body>
</html>
