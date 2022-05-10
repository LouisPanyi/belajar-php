<?php 
include "./oop-simple.php";
?>

<html>
<body>

<table style="border: 1px solid black;">
    <tr>
        <th>List Team Tournament Mobile Legend Lain Hati</th>
    </tr>

<?php

// setting nilai total loop
$total = 100;

for($i=0; $i<$total; $i++){
    // eksekusi perintah di bawah ini sebanyak $total
    $nomor = $i + 1;
    if(0 === $nomor % 10){
        $color = "yellow";
    }elseif(0 === $nomor % 2){
        $color = "gray";
    }else{
        $color = "white";
    }
    echo "<tr style='background-color:{$color}'>\n";
    echo "<td>{$nomor}</td>\n";
    echo "</tr>\n";
}

$user = new User();
$user->setUsername("Toni OK");
echo $user->getUsername()."<br/>";
?>
</table>

</body>
</html>