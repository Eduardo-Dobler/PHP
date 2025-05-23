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
        <?php
        // Boletim
        $prova = 8;
        $trabalho = 9.5;
        //Cálculo da Média
        $media = ($prova + $trabalho)/2;
        if ($media >= 6) {
            echo "A média é $media - PD";
        }else {
            echo "A média é $media - ND";
        }
        ?>
    </body>
</html>
