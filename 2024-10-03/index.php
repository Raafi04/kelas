selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 menggunakan function
<?php
    echo "<br>";
    $x = modulo(7,5);
    $x = tambah($x, kali(8, 4));
    $y = bagi(9, 3);
    $x = kurang($x, $y);
    echo $x;


    echo "<br>";
    $hasil = tambah(5, kali(3,7));
    $hasil = bagi($hasil, 4);
    $hasil = kurang($hasil, 9);
    $hasil = modulo($hasil, 8);
    echo $hasil;
    function kali($a, $b){
        $c = $a * $b;
        return $c;
    }

    echo "<br>";
    echo kali(5,b: 7)+ 5;
    echo "<br>";
    
    function tambah($a, $b) {
        $c = $a + $b;
        return $c;
    }

    echo tambah(5,(3* 7) / 4) - 9 % 8;
    echo "<br>";

    function kurang($a, $b) {
        $c = $a - $b;
        return $c;
    }

    kurang(15,5);
    echo "<br>";

    function bagi($a, $b) {
        $c = $a / $b;
        return $c;
    }

    bagi(10,2);
    echo "<br>";

    function modulo($a, $b) {
        $c = $a % $b;
        return $c;
    }

    modulo(255,11);
?>