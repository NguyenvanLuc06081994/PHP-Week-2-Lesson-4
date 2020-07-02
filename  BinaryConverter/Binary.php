<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number" placeholder="input number">
    <input type="submit" value="Change">
</form>
<?php


class Binary
{
    protected $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function changeToBinary($number)
    {
        $arr = [];
        while ($number > 0) {
            $result = $number % 2;
            $number = (int)($number / 2);
            array_unshift($arr, $result);
        }
        return implode('', $arr);
    }

    public function changeToNumber($number)
    {
        $newNumber = 0;
        $arr = str_split($number);
        $arrNew = array_reverse($arr);
        for ($i = 0; $i < count($arrNew); $i++) {
            $newNumber += $arrNew[$i] * 2 ** $i;
        }
        return $newNumber;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $binary = new Binary();
    echo $number . " chuyen sang so nhi phan la:";
    echo $binary->changeToNumber($number);
}
?>
</body>
</html>
