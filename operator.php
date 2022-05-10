<?php   
$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;

$namaDepan = "Nurul";
$namaLengkap = "{$namaDepan} Huda";

$a = 5;
$b = 15;
echo var_dump($a) . "<br>";

$b += 10; # sama dengan $a = $a + 10;
echo var_dump($b) . "<br>";

$a -= 20; # sama dengan $a = $a - 20;
echo var_dump($a) . "<br>";

$a *= 100; # sama dengan $a = $a * 100;
echo var_dump($a) . "<br>";

$a /= 10; # sama dengan $a = $a / 10;
echo var_dump($a) . "<br>";

# modulus
echo "{$a} % {$b} = " . ($a % $b) . " <br>";
#Contoh:
# 5 % 2 = 1;
# 84 % 9 = 3;

# eksponensial
echo "{$a} ** {$b} = " . ($a ** $b) . " <br>";
# negasi
echo "-a = " . (-$a) . " <br>";
echo "eksponen 5 = ". (4**3)."<br/>";

$nilai = 7;
if( $nilai <= 5 ){
    // lakukan ini:
    echo "Anda bodoh sekali <br/>";
}elseif($nilai > 5 && $nilai <= 7 ){
    echo "Nilai Anda cukup baik <br/>";
}else{
    echo "Anda Pintar <br/>";
}



$a = true && true; # true
$b = true and false; # false
$c = false && false; # false
$d = true || false; # false

# ekspresi berikut akan diselesaikan dari kiri ke kanan
$e = true && false && false;

# ekspresi yang berada di dalam kurung diselesaikan terlebih dahulu
$f = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);

# negasi
$g = !true;
$h = !(true && !false);

# var_dump semua variabel di atas untuk melihat hasilnya
var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";
var_dump($h); echo "<br>";