<?php
//câu 8 
function giaiPTB2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            echo ($c == 0) ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
        } else {
            echo "Phương trình có 1 nghiệm: x = " . (-$c / $b);
        }
        return;
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        echo "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        echo "Phương trình có nghiệm kép: x = " . (-$b / (2 * $a));
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}
//câu 9:
function inChuNhatRong($dong = 5, $cot = 7) {
    for ($i = 1; $i <= $dong; $i++) {
        for ($j = 1; $j <= $cot; $j++) {
            if ($i == 1 || $i == $dong || $j == 1 || $j == $cot) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
//câu 10:
function tinhTrungBinh($arr) {
    if (count($arr) == 0) return 0;
    $tong = array_sum($arr);
    return $tong / count($arr);
}

?>
