<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet4</title>
</head>
<body>
    <h3>looping for</h3>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo str_repeat($i, $i) . "<br>";
    }
    ?>

    <h3>looping while</h3>
    <?php
    $i = 1;
    while ($i <= 5) {
        echo str_repeat($i, $i) . "<br>";
        $i++;
    }
    ?>

    <h3>faktorial for</h3>
    <?php
    function factorialFor($n) {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }

    // Contoh penggunaan
    $number = 5;
    echo "Faktorial dari $number adalah " . factorialFor($number);
    ?>

    <h3>faktorial while</h3>
    <?php
    function factorialWhile($n) {
        $result = 1;
        $i = 1;
        while ($i <= $n) {
            $result *= $i;
            $i++;
        }
        return $result;
    }

    // Contoh penggunaan
    $number = 7;
    echo "Faktorial dari $number adalah " . factorialWhile($number);
    ?>

    <h3>faktorial do while</h3>
    <?php
    function factorialDoWhile($n) {
        $result = 1;
        $i = 1;
        do {
            $result *= $i;
            $i++;
        } while ($i <= $n);
        return $result;
    }

    // Contoh penggunaan
    $number = 10;
    echo "Faktorial dari $number adalah " . factorialDoWhile($number);
    ?>
</body>
</html>