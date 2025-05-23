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
            button{
                border: solid black 2px;
                border-radius: 7px;
                padding: 5px;
            }
            button:hover{
                background-color: lightblue;
            }
            button:active{
                background-color: lightcoral;
                padding: 4px
            }
                  </style>
        <form method="post">
            <h1>🙀Pet shop do Dobler🐶</h1>
            <br>
            <p for="fname" >Seu nome:</p><br>
            <input type="text" id="nomec" name="nomec"><br>
            <br>
            <p for="fname" >Nome do bichinho:</p><br>
            <input type="text" id="nomeb" name="nomeb"><br>
            <br>
            <p for="fname" >Valor Vacina:</p><br>
            <input type="number" id="vac" name="vac"><br>
            <br>
            <p for="fname" >Valor Ração:</p><br>
            <input type="number" id="rac" name="rac"><br>
            <br>
            <button type="submit" value="Enviar">Enviar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomec = $_POST["nomec"];
        $nomeb = $_POST["nomeb"];
        $vac = $_POST["vac"];
        $rac = $_POST["rac"];
        
        $vlrtotal = $vac + $rac;
        echo "<br><h2>$nomec, o total da compra para o/a $nomeb é de R$$vlrtotal,00</h2>";
        }
        ?>
    </body>
</html>
