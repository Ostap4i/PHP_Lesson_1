!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
<?php

$array = [12, 7, 15, 10, 8, 18, 3, 21, 5, 13];


echo "Elements that are larger than the previous ones:\n";
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $array[$i - 1]) {
        echo $array[$i] . " ";
    }
}
echo "\n\n";


$sum = array_sum($array);
$average = $sum / count($array);

echo "Sum arrays: $sum\n";
echo "Average: $average\n\n";


$oddElements = array_filter($array, function($value) {
    return $value % 2 !== 0;
});

rsort($oddElements);

echo "Sorted odd items in descending order:\n";
echo implode(" ", $oddElements);
?>



<?php
// Task2
$dates = [
    "2024-01-01",
    "2024-01-15",
    "2024-02-01",
    "2024-02-20",
    "2024-03-05"
];


$dateObjects = array_map(function($date) {
    return new DateTime($date);
}, $dates);


echo "The number of days between adjacent dates:\n";
for ($i = 1; $i < count($dateObjects); $i++) {
    $interval = $dateObjects[$i]->diff($dateObjects[$i - 1]);
    echo $dates[$i - 1] . " - " . $dates[$i] . ": " . $interval->days . " days\n";
}
?>




<?php



$elements = [
    ["type" => "text", "value" => "Hello"],
    ["type" => "number", "value" => "123"],
    ["type" => "email", "value" => "example@mail.com"],
    ["type" => "password", "value" => "secret"],
    ["type" => "date", "value" => "2024-01-01"],
    ["type" => "color", "value" => "#ff0000"],
    ["type" => "checkbox", "value" => "1"],
    ["type" => "radio", "value" => "on"],
    ["type" => "url", "value" => "https://example.com"],
    ["type" => "range", "value" => "50"]
];


echo "<form>\n";
foreach ($elements as $element) {
    echo "<label>Type: {$element['type']} - Value: {$element['value']}</label><br>";
    echo "<input type='{$element['type']}' value='{$element['value']}'><br><br>\n";
}
echo "</form>\n";
?>





</body>

</html>