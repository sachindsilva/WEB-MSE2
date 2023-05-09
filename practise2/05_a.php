<?php
$array1 = array(2, 3, 1, 4, 4, 5);
$array2 = array(50, 2, 30, 20, 40, 30);


echo "Array1 Contents are ";
echo "<br>";

foreach ($array1 as $a) {
    echo "$a" . " ";

}
echo "<hr>";

echo "Array2 Contents are ";
echo "<br>";

foreach ($array2 as $a) {
    echo "$a" . " ";

}
echo "<hr>";

sort($array1);
sort($array2);



echo "Sorted Array1 Contents are ";
echo "<br>";

foreach ($array1 as $a) {
    echo "$a" . " ";

}
echo "<hr>";

echo "Sorted Array2 Contents are ";
echo "<br>";

foreach ($array2 as $a) {
    echo "$a" . " ";

}
echo "<hr>";

echo "Common Elements";
echo "<br>";

$common = array_unique(array_intersect($array1, $array2));

foreach ($common as $c) {
    echo "$c" . " ";
}
echo "<br>";

$array1 = array_unique($array1);
$array2 = array_unique($array2);

echo "Array1 Contents are ";
echo "<br>";

foreach ($array1 as $a) {
    echo "$a" . " ";

}
echo "<hr>";

echo "Array2 Contents are ";
echo "<br>";

foreach ($array2 as $a) {
    echo "$a" . " ";

}
echo "<hr>";


?>