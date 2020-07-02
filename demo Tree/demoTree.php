<?php
function binarySearch($arr, $data)
{
    $result = [];
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);
//        var_dump($mid);
//        die();
//        settype($mid, "integer");
        if ($data == $arr[$mid]) {
            array_push($result, $mid);
            return $mid;
        } else if ($data < $arr[$mid]) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return $result;

}

$arr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($arr, $i);
}
$arr[10] = 5;
print_r($arr);
echo "da tim thay phan tu o vi tri thu : ";
var_dump(binarySearch($arr, 5));