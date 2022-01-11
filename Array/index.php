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
    $pColor = ["red", "green", "white"];
    $paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $pColor[2] carpet, the $pColor[1] lawn, the $pColor[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph;
    echo "<br>";
    echo "============================================ <br>";
    echo "E2. <br>";
    $colors = ["Green", "Red", "White"];
    ?>
    <ul>
        <?php
        foreach ($colors as $values) {
        ?>
            <li><?php echo $values ?></li>
        <?php
        }
        ?>
    </ul>
    <?php
    echo "<br>";
    echo "============================================ <br>";
    echo "E3. <br>";
    $cities = [
        "Italy" => "Rome",
        "france" => "paris",
        "Germany" => "Berlin",
        "Greece" => "Athens"
    ];
    foreach ($cities as $key => $values) {
        echo "The capital of  $key is $values <br>";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E4. <br>";
    echo array_shift($colors);
    echo "<br>";
    echo "============================================ <br>";
    echo "E5. <br>";
    $arrToInsert = [1, 2, 3, 4, 5];
    $insertedArray = [];
    $newElement = "$";
    $location = 4;
    foreach ($arrToInsert as $key => $value) {
        if ($key == $location - 1) {
            array_push($insertedArray, $newElement);
        }
        array_push($insertedArray, $value);
    }
    echo (join(" ", $insertedArray));
    echo "<br>";
    echo "============================================ <br>";
    echo "E6. <br>";
    $fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
    asort($fruits);
    foreach ($fruits as $key => $value) {
        echo "$key = $value <br>";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E7. <br>";
    $temps = [
        78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
        65, 64, 68, 73, 75, 79, 73
    ];
    $avgTemp = array_sum($temps);
    echo "Average Temperature is: " . $avgTemp / count($temps) . "<br>";
    sort($temps);
    $lowTemps = [];
    $highTemps = [];
    foreach ($temps as $key => $value) {
        if ($key < 8) {
            array_push($lowTemps, $value);
        }
        if ($key > count($temps) - 8) {
            array_push($highTemps, $value);
        }
    }
    echo "List of seven lowest temperatures: " . join(" ", $lowTemps) . "<br>";
    echo "List of seven highest temperatures: " . join(" ", $highTemps) . "<br>";
    echo "<br>";
    echo "============================================ <br>";
    echo "E8. <br>";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    echo (join(", ", $result));
    "<br>";
    echo "<br>";
    echo "============================================ <br>";
    echo "E1. <br>";
    $colors = ["red", "blue", "white", "yellow"];
    for ($i = 0; $i < count($colors); $i++) {
        $colors[$i] = strtoupper($colors[$i]);
    }
    echo (join(", ", $colors));
    "<br>";
    echo "<br>";
    echo "============================================ <br>";
    echo "E2. <br>";
    for ($i = 0; $i < count($colors); $i++) {
        $colors[$i] = strtolower($colors[$i]);
    }
    echo (join(", ", $colors));
    echo "<br>";
    echo "============================================ <br>";
    echo "E9. <br>";
    $arrOfNums = [];
    for ($i = 200; $i < 250; $i += 4) {
        array_push($arrOfNums, $i);
    }
    echo join(",", $arrOfNums);
    echo "<br>";
    echo "============================================ <br>";
    echo "E10. <br>";
    $words = ["abcd", "abc", "de", "hjjj", "g", "wer"];
    $longestStr = $words[0];
    $shortestStr = $words[0];
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($words[$i]) > strlen($longestStr)) {
            $longestStr = $words[$i];
        }
        if (strlen($words[$i]) < strlen($shortestStr)) {
            $shortestStr = $words[$i];
        }
    }
    echo "The longest length : " . strlen($longestStr) . " .<br>";
    echo "The longest length : " . strlen($shortestStr) . " .<br>";
    echo "<br>";
    echo "============================================ <br>";
    echo "E11. <br>";
    $arrayOfRandoms = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($arrayOfRandoms, (rand(11, 20)));
    }
    echo join(" ", $arrayOfRandoms);
    echo "<br>";
    echo "============================================ <br>";
    echo "E12. <br>";
    $arrayOfNumbers = [2, 11, 0, 12, 6];
    $lowestNumber = $arrayOfNumbers[0];
    foreach ($arrayOfNumbers as $value) {
        if ($value < $lowestNumber && $value > 0) {
            $lowestNumber = $value;
        }
    }
    echo $lowestNumber;
    ?>
</body>

</html>