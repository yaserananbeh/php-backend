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
    for ($i = 1; $i < 11; $i++) {
        if ($i !== 10) {
            echo $i . "-";
        } else {
            echo $i;
        }
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E2. <br>";
    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
        $sum += $i;
    }
    echo $sum;
    echo "<br>";
    echo "============================================ <br>";
    echo "E3. <br>";
    $charNum = 65;
    for ($i = 0; $i < 5; $i++) {

        $char = chr($charNum);
        for ($j = 5; $j > 0; $j--) {
            if ($j > $i + 1) {
                echo chr(65);
            } else {
                echo $char;
            }
        }
        echo "<br>";
        $charNum = $charNum + 1;
    }

    echo "<br>";
    echo "============================================ <br>";
    echo "E4. <br>";
    $num = 1;
    for ($i = 0; $i < 5; $i++) {
        for ($j = 5; $j > 0; $j--) {
            if ($j > $i + 1) {
                echo 1;
            } else {
                echo $num;
            }
        }
        echo "<br>";
        $num = $num + 1;
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E5. <br>";

    for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j < 6; $j++) {
            if ($j == $i) {
                echo $i;
            } else {
                echo 0;
            }
        }
        echo "<br>";
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E6. <br>";
    function factorial($num)
    {
        $factorial = 1;
        for ($i = $num; $i > 1; $i--) {
            $factorial *= $i;
        }
        return $factorial;
    }
    echo factorial(5);
    echo "<br>";
    echo "============================================ <br>";
    echo "E7. <br>";
    echo "============================================ <br>";
    $fibonacciArr = [];
    array_push($fibonacciArr, 0, 1);
    for ($i = 2; $i < 9; $i++) {
        array_push($fibonacciArr, $fibonacciArr[$i - 1] + $fibonacciArr[$i - 2]);
    }
    echo join(", ", $fibonacciArr);
    echo "<br>";
    echo "============================================ <br>";
    echo "E8. <br>";
    $numOfcs = 0;
    $stringToCountC = "Orange Coding Academy";
    $stringWords = str_split($stringToCountC, 1);
    foreach ($stringWords as $value) {
        if (strtolower($value) === "c") {
            $numOfcs += 1;
        }
    }
    echo "Number of c : " . $numOfcs;
    echo "<br>";
    echo "============================================ <br>";
    echo "E9. <br>";
    ?>
    <table border="1">

        <?php
        for ($i = 1; $i < 7; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 1; $j < 6; $j++) {
                ?>
                    <td><?php echo "$i * $j = " . $i * $j ?></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    echo "<br>";
    echo "============================================ <br>";
    echo "E10. <br>";
    for ($i = 1; $i < 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo " FizzBuzz ";
        } else if ($i % 3 == 0) {
            echo " Fizz ";
        } else if ($i % 5 == 0) {
            echo " Buzz ";
        } else {
            echo $i . " ";
        }
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E11. <br>";
    $numbersEachRow = 1;
    $counter = 1;
    for ($i = 1; $i < 6; $i++) {
        for ($j = 0; $j < $numbersEachRow; $j++) {
            echo $counter;
            $counter++;
        }
        if ($j == $numbersEachRow) {
            echo "<br>";
            $numbersEachRow += 1;
        }
    }
    echo "<br>";
    echo "============================================ <br>";
    echo "E12. <br>";
    $start = 3;
    $end = 5;
    for ($i = 0; $i <= 8; $i++) {
        $counter = 65;
        if ($i <= 4) {
            $z = 0;
            for ($j = 0; $j <= 8; $j++) {
                if ($j > $start && $j < $end) {
                    // echo $counter;
                    if ($z % 2 == 0) {
                        echo chr($counter);
                        $counter += 1;
                    } else {
                        echo str_repeat("&nbsp;", 3);
                    }
                    $z++;
                } else {
                    echo str_repeat("&nbsp;", 3);
                }
            }
            $start -= 1;
            $end += 1;
            echo "<br>";
        }
    }
    $start = 0;
    $end = 8;
    for ($i = 0; $i <= 8; $i++) {
        $counter = 65;

        if ($i < 4) {
            $z = 0;
            for ($j = 0; $j <= 8; $j++) {
                if ($j > $start && $j < $end) {
                    // echo $counter;
                    // $counter += 1;
                    if ($z % 2 == 0) {
                        echo chr($counter);
                        $counter += 1;
                    } else {
                        echo str_repeat("&nbsp;", 3);
                    }
                    $z++;
                } else {
                    echo str_repeat("&nbsp;", 3);
                }
            }
            $start += 1;
            $end -= 1;
            echo "<br>";
        }
    }

    ?>
</body>

</html>