<?php
    include './Array.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo 'array 1 - ';
            print_r($array1);
            echo '<br/>';
            echo 'array 2 - ';
            print_r($array2);
            echo '<br/>';
            echo 'array 3 -';
            print_r($array3);
            echo '<br/>';
            echo 'array 4 -  ';
            print_r($array4);
            echo '<br/>';
            echo 'array 5 - ';
            print_r($array5);
            echo '<br/>';
            echo 'array 6 - ';
            print_r($array6);
            echo '<br/>';
            echo 'array 7 - ';
            print_r($array7);
            echo '<br/>';
            echo 'Elemento 1 da array 7 - ';
            var_dump($array7["foo"]);
            echo '<br/>';
            echo 'Elemento 2 da array 7 - ';
            var_dump($array7[42]);
            echo '<br/>';
            echo 'Elemento 3 da array 7 - ';
            var_dump($array7["multi"]["dimencional"]["array"]);
        ?>
    </body>
</html>
