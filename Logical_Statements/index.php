<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "E1. <br>";
    $year = 2013;
    if ($year % 4 == 0) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E2. <br>";
    $temperature = 27;
    if ($temperature < 20) {
        echo "it is wintertime";
    } else {
        echo "it is summertime";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E3. <br>";
    $firstInteger = 2;
    $secondInteger = 2;
    if ($firstInteger == $secondInteger) {
        echo ($firstInteger + $secondInteger) * 3;
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E4. <br>";
    if ($firstInteger + $secondInteger == 30) {

        echo  30;
    } else {
        echo "false";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E5. <br>";
    $numMult3 = 20;
    if ($numMult3 % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E6. <br>";
    $inRangeNum = 20;
    if ($inRangeNum <= 50 && $inRangeNum >= 20) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E7. <br>";
    $arrToFindLargest = [1, 5, 9];
    $largestNum = $arrToFindLargest[0];
    foreach ($arrToFindLargest as $value) {
        if ($value > $largestNum) {
            $largestNum = $value;
        }
    }
    echo $largestNum;
    echo "<br>";
    echo "============================================ <br>";
    echo "E8. <br>";
    $electricityUnits = 300;
    if ($electricityUnits >= 0 && $electricityUnits <= 50) {
        echo $electricityUnits * 2.50;
    } elseif ($electricityUnits > 50 && $electricityUnits <= 150) {
        echo $electricityUnits * 5.00;
    } elseif ($electricityUnits > 150 && $electricityUnits <= 250) {
        echo $electricityUnits * 6.20;
    } elseif ($electricityUnits > 250) {
        echo $electricityUnits * 7.50;
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E9. <br>";
    $num1ToCalculate = 5;
    $num2ToCalculate = 5;
    function addition($num1, $num2)
    {
        return $num1 + $num2;
    }
    function subtraction($num1, $num2)
    {
        return $num1 - $num2;
    }
    function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }
    function division($num1, $num2)
    {
        return $num1 / $num2;
    }
    echo "addition : " . addition($num1ToCalculate, $num2ToCalculate) . "<br>";
    echo "subtraction : " . subtraction($num1ToCalculate, $num2ToCalculate) . "<br>";
    echo "multiplication : " . multiplication($num1ToCalculate, $num2ToCalculate) . "<br>";
    echo "division : " . division($num1ToCalculate, $num2ToCalculate) . "<br>";
    echo "<br>";
    echo "============================================ <br>";
    echo "E10. <br>";
    $isEligibleAga = 15;
    if ($isEligibleAga >= 18) {
        echo "is eligible to vote";
    } else {
        echo "is no eligible to vote";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E11. <br>";
    $numToCheck = -60;
    if ($numToCheck > 0) {
        echo "Positive";
    } elseif ($numToCheck < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E11. <br>";
    $arrayOfMarks = [60, 86, 95, 63, 55, 74, 79, 62, 50,100,1000];
    $sumOfMarks = array_sum($arrayOfMarks);
    $avgOfMarks = $sumOfMarks / count($arrayOfMarks);
    switch ($avgOfMarks) {
        case $avgOfMarks > 90:
            echo "A";
            break;
        case $avgOfMarks > 80:
            echo "B";
            break;
        case $avgOfMarks > 70:
            echo "C";
            break;
        case $avgOfMarks > 60:
            echo "D";
            break;
        case $avgOfMarks < 60:
            echo "F";
            break;

        default:
            echo "Out Of Range !!";
            break;
    }
    ?>
</body>

</html>