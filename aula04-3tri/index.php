<html>
    <head>
        <title> Aula 04 PHP</title>
    </head>
    <body>
        <?php

          $n1=$_GET["a"];
          $n2=$_GET["b"];
          
          echo"A soma dos números $n1 e $n2 é igual a ".($n1+$n2);
          echo"<br><br>A multiplição dos números $n1 e $n2 é igual a ".($n1*$n2);
          echo"<br><br>A Subtração dos números $n1 e $n2 é igual a ".($n1-$n2); 
          echo"<br><br>A divisão dos números $n1 e $n2 é igual a ".($n1/$n2);
          echo"<br><br>O resto da divisão dos números $n1 e $n2 é igual a ".($n1%$n2);
        ?>
    </body>
</html>
