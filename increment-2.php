<?php
$a = 5;
echo "a = {$a} <br>";
--$a;
echo "a = {$a} <br>";

# variabel $a menambah dirinya sendiri dengan angka 1
# lalu hasil terbaru tersebut akan dimasukkan ke variabel $b
$b = --$a;
echo "b = {$b} <br>";

# begitu juga yang $c.
$c = ++$b;
echo "c = {$c} <br>";