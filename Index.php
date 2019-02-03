<p>Задание 1</p>
<?php
function foo($str1,$str2){
    echo strlen($str1);
    echo strlen($str2);
    $n = strlen($str1) - strlen($str2);
    if ($n > 0) {
        $i = 0;
        while ($i++ < $n) {
            $str2 = substr_replace($str2, "0", 0, 0);
        }
    } else {
        $i = 0;
        while ($i-- > $n) {
            $str1 = substr_replace($str1, "0", 0, 0);
        }
    }
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    $i = strlen($str1);
    $arr3 = array_fill(0, $i, "0");
    while ($i-- > 0) {
        $a = $arr1[$i] + $arr2[$i];
        if ($a + $arr3[$i] > 9) {
            $arr3[$i] = ($arr3[$i] + $a) % 10;
            $arr3[$i-1] = 1;
        } else {
            $arr3[$i] = $arr3[$i] + $a;
        }
    }
//    if ($arr3[-1] = 1) {
//        $i = strlen($str1);
//        while ($i-- > -1){
//            $arr3[$i+1]=$arr3[$i];
//        }
//        unset($arr3[-1]);
//    }
    print_r($arr3);
    echo $arr3[-1];
    $len=strlen($str1);
    $i = 0;
    while ($i < $len) {
    echo $arr3[$i];
    $i++;
    }
}

foo(999999999999,99999999999);

?>




