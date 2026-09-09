//Phan 1
//1.c 2.b 3.a 4.b 5.b
//Phan 2
//Bai 1.
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
//Bai 2.
<?php
$n = 17;
$so = true;
if ($n < 2) {
    $so = false;
} else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $so = false;
            break;
        }
    }
}
if ($so) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}

?>
//Bai 3.
<?php
function inHinhChuNhat($rong, $cao) {
    
    for ($i = 1; $i <= $cao; $i++) {
        
        for ($j = 1; $j <= $rong; $j++) {
            echo "*";
        }
        
        echo "<br>";
    }
}

// Gọi hàm với chiều rộng = 5, chiều cao = 3
inHinhChuNhat(5, 3);

?>
