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
        // variaveis
        $anoatual = 2025;
        $anonasc = 2009;
        $idade = $anoatual - $anonasc;
        if ($idade >= 16) {
            echo "Pode votar";
        }else{
            echo "Não pode votar";
        }
        ?>
</body>
</html>