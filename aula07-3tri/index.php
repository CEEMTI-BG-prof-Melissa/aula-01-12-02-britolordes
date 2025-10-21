<html>
    <head>
        <title> Aula 07 PHP</title>
    </head>
    <body>
        <?php
            //aula07
            //Gabriel e Raqueli
            //08/10/2025

            //Declara a variavel o valor 10
            $num=10;
            //Mostra o valor da variavel $num
            echo"Valor inicial : $num";
            //Atualiza a variavel $num somando mais 5
            $num+=5;
            //Printa a variavel $num atualizada
            echo"<br><br>A soma de 10 mais 5 e : $num";
            //Atualiza a variavel $num subtraindo 2
            $num-=2;
            //Printa a variavel $num atualizada
            echo"<br>Apos subtrair 2 : $num";
            //atualiza a variavel a multiplicando por 
            $num*=3;
            //Printa a variavel $num atualizada
            echo"<br>Apos multiplica por 3 : $num";

            $num/=2;
            //Printa a variavel $num atualizada
            echo"<br>Apos dividi por 2 : $num";
            //Soma mais um a variavel
            ++$num;
            //Printa a variavel $num atualizada
            echo"<br><br>Apos Pré-incremento $num";
            //Printa a variavel e atualiza ela adicionando mais 1 logo em seguida
            echo"<br>Apos Pós-incremento : " .($num++);

            --$num;
            //Printa a variavel $num atualizada
            echo"<br>Apos Pré-encremento $num";
            //Printa a variavel e atualiza ela subtraindo 1 logo em seguida
            echo"<br>Apos Pré-encremento : " .($num--);
            //Printa o valor final da variavel
            echo"<br><br>Valor final : $num"


        ?>
    </body>
</html>
