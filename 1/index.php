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
    $name = "yaser al-anaNbeh";
    $upperCaseString = strtoupper($name);
    $lowerCaseString = strtolower($name);
    $firstCapitalString = ucfirst($name);
    $capitalizeString = ucwords($name);
    echo "E1. <br>";
    echo "upper case string " . $upperCaseString . "<br>";
    echo "lower case string " . $lowerCaseString . "<br>";
    echo "first letter case string " . $firstCapitalString . "<br>";
    echo "capitalize string " . $capitalizeString . "<br>";
    echo "============================================ <br>";

    echo "E2. <br>";
    $dateString = "085119";
    $stringToTime = strtotime($dateString);
    $newFormat = date("H:i:s", $stringToTime);
    echo "string To Date " . $newFormat . "<br>";
    echo "============================================ <br>";

    echo "E3. <br>";
    $choosenString = "I am a full stack developer at orange coding academy";
    $wordToSearch = "ORANGe";
    if (str_contains($choosenString, strtolower($wordToSearch))) {
        echo "WORD FOUND!<br>";
    } else {
        echo "WORD NOT FOUND<br>";
    }
    echo "============================================ <br>";
    echo "E4. <br>";
    $url = "www.orange.com/index.php";
    echo basename($url) . "<br>";
    echo "============================================ <br>";
    echo "E5. <br>";
    $email  = 'yaser.ananbeh74@gmail.com';
    $username = strstr($email, '@', true);
    echo $username . "<br>";
    echo "============================================ <br>";
    echo "E6. <br>";
    $stringToSub = "info@orange.com";
    $lastThreeChars = substr($stringToSub, -3);
    echo $lastThreeChars . "<br>";
    echo "============================================ <br>";
    echo "E7. <br>";
    function passwordGenerator($passLength)
    {
        $passChars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYXabcdefghijklmnopqrstuvwxyz";
        $arrOfChars = str_split($passChars);
        $passwordArr = [];
        for ($i = 0; $i < $passLength; $i++) {
            shuffle($arrOfChars);
            array_push($passwordArr, $arrOfChars[0]);
        }
        $password = join("", $passwordArr);
        return $password;
    }
    echo passwordGenerator(14) . "<br>";
    echo "============================================ <br>";
    echo "E8. <br>";
    $stringToReplace = "That new trainee is so genius.";
    $newWord = "Our";
    // echo str_replace("/That/", $newWord, $stringToReplace, 1) . "<br>";
    echo str_replace("That", "Our", $stringToReplace) . "<br>";
    echo "============================================ <br>";
    echo "E9. <br>";
    $string1ToCheck = 'dragbnball';
    $string2ToCheck = 'dragonboll';
    $differenceArr = [];
    for ($i = 0; $i < strlen($string1ToCheck); $i++) {
        if ($string1ToCheck[$i] !== $string2ToCheck[$i]) {
            array_push($differenceArr, [$i, $string1ToCheck[$i], $string2ToCheck[$i]]);
        }
    }
    foreach ($differenceArr as $key => $value) {
        echo "$key- difference between two strings at position $value[0] : \"$value[1]\" vs \"$value[2]\" <br>";
    }
    echo "============================================ <br>";
    echo "E10. <br>";
    $stringToPutInArr = "Twinkle, twinkle, little star.";
    $splittedString = explode(",", $stringToPutInArr);
    var_dump($splittedString);
    echo "<br>";
    echo "============================================ <br>";
    echo "E11. <br>";
    function nextLetter($letter)
    {
        if (ord($letter) == 122) {
            $newAsciiCode = ord("a");
        } else {
            $newAsciiCode = ord($letter) + 1;
        }
        return chr($newAsciiCode);
    }
    echo nextLetter("z");
    echo "<br>";
    echo "============================================ <br>";
    echo "============================================ <br>";
    echo "============================================ <br>";
    echo "E12a. <br>";
    function addWordBetween($string, $word, $after)
    {
        $arrOfWords = explode(" ", $string);
        $newArrOfWords = [];
        foreach ($arrOfWords as  $value) {
            if ($value == "$after") {
                array_push($newArrOfWords, $value . " $word ");
            } else {
                array_push($newArrOfWords, $value . " ");
            }
        }
        return join($newArrOfWords);
    }
    echo addWordBetween("The brown fox", "test", "fox");
    // $stringWithNewWord = str_replace("The brown", "The quick brown", $stringToAddWordBetween);
    // echo $stringWithNewWord;

    echo "<br>";
    echo "============================================ <br>";
    echo "E12b. <br>";
    $stringToGetFirstWord = "The quick brown fox";
    echo strtok($stringToGetFirstWord, " ");
    echo "<br>";
    echo "============================================ <br>";
    echo "E13. <br>";
    $numberToRemoveZeros = 000657022.24;
    $numbersArr = str_split((string)$numberToRemoveZeros);
    $numbersArrWithoutZeros = [];
    foreach ($numbersArr as  $value) {
        if ($value !== "0") {
            array_push($numbersArrWithoutZeros, $value);
        }
    }
    echo join($numbersArrWithoutZeros);
    echo "<br>";
    echo "============================================ <br>";
    echo "E14. <br>";
    $stringToRemoveWord = "The quick brown fox jumps over the lazy dog";
    $stringWithoutWord = str_replace("fox", "Our", $stringToRemoveWord);
    echo $stringWithoutWord;
    echo "<br>";
    echo "============================================ <br>";
    echo "E15. <br>";
    $stringToRemoveDashes = "The quick brown fox jumps over the lazy dog---";
    $stringWithoutDashes = str_replace("-", "", $stringToRemoveDashes);
    echo $stringWithoutDashes;
    echo "<br>";
    echo "============================================ <br>";
    echo "E16. <br>";
    $stringToRemoveSymbols = '\"\1+2/3*2:2-3/4*3';
    $stringWithoutSymbols = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $stringToRemoveSymbols);
    echo $stringWithoutSymbols;
    echo "<br>";
    echo "============================================ <br>";
    echo "E17. <br>";
    $stringToGetFirstWord = "The quick brown fox jumps over the lazy dog";
    $arrayOf5Words = explode(" ", $stringToGetFirstWord, 6);
    $stringOf5Words = implode(" ", array_splice($arrayOf5Words, 0, 5));
    echo $stringOf5Words;
    echo "<br>";
    echo "============================================ <br>";
    echo "E18. <br>";
    $stringToRemoveComma = "2,543.12";
    $stringWithoutComma = str_replace(",", "", $stringToRemoveComma);
    echo $stringWithoutComma;
    echo "<br>";
    echo "============================================ <br>";
    echo "E19. <br>";

    for ($i = ord("a"); $i < ord("z"); $i++) {
        echo chr($i) . " ";
    }
    ?>


</body>

</html>