<html>
    <head>
        <title> Aula 06 PHP</title>
    </head>
    <body>
        <h3>Operadores de Atribuição</h3>
        <hr>
        <?php

         $a=2;
         $b= $a+5;
         echo"A é igual a $a e B é igual a $b.";
         echo"<br><br>";

         $a=$a+3;
         echo"Agora A é igual a $a.";
         echo"<br><br>";

         $b+=8;
         echo"Agora B é igual a $b.";
         echo"<br><br>";

         $b-=5;
         echo"Agora B é igual a $b.";
         echo"<br><br><hr>";

         $b*=2;
         echo"O valor de B multiplicado por 2 é $b, Agora B igual a $b";
         echo"<br><br>";

         $b/=10;
         echo"O valor de B dividido por 10 é $b, valor de B igual a $b";
         echo"<br><br>";

         $b%=3;
         echo"O valor do modulo de B é $b, agora B igual a $b";
         echo"<br><br>";
         
         $b.=10;
         echo"O valor da concatenação de B é $b, agora B igual a $b";

        ?>
    </body>
</html>
