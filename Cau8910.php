// câu 8
<?php
function giaiPTB2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return $c == 0 ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
        } else {
            return "Nghiệm x = " . (-$c / $b);
        }
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        return "Nghiệm kép x = " . (-$b / (2 * $a));
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Có 2 nghiệm: x1 = $x1, x2 = $x2";
    }
}
echo giaiPTB2(1, -3, 2); // ví dụ: x1=2, x2=1
?>
// câu 9
<?php
function printEmptyRect($rows = 5, $cols = 7) {
    $isCli = (php_sapi_name() === 'cli');
    $nl = $isCli ? PHP_EOL : '<br>';
    $space = $isCli ? ' ' : '&nbsp;';

    for ($r = 1; $r <= $rows; $r++) {
        for ($c = 1; $c <= $cols; $c++) {
            if ($r === 1 || $r === $rows || $c === 1 || $c === $cols) {
                echo '*';
            } else {
               
                echo $space;
            }
        }
        echo $nl;
    }
}
printEmptyRect();
?>
//cau 10
<?php
function tbc($arr) {
    if (count($arr) == 0) return 0;
    $tong = array_sum($arr);
    return $tong / count($arr);
}
$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng = " . tbc($mang); 
?>
