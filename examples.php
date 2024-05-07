//////////////////////////
// Example 1
//

<?php
echo "Hello world!";


//////////////////////////
// Example 2
//

<?php
// Define variables
$x = 5;
$y = range(0, 10);
$firstWord = 'Hello';
$secondWord = 'World';

/* Multiple
Line
Comment
*/
echo $firstWord.' '.$secondWord."<br />\n";
echo "$firstWord $secondWord";


//////////////////////////
// Example 3
//

<?php
$array = range(0, 10);

// Loop over each index in the array.
for ($i = 0; $i < count($array); $i++) {    
    if ($array[$i] % 2 == 0) {
        echo "$array[$i] is even.<br />\n";
    } else {
        echo "$array[$i] is odd.<br />\n";
    }
}


//////////////////////////
// Example 4
//

<?php
$array = range(0, 10);

// Loop over each index and value in the array.
foreach ($array as $key => $value) {
    if ($value % 2 == 0) {
        echo "$value is even.<br />\n";
    } else {
        echo "$value is odd.<br />\n";
    }
}


//////////////////////////
// Example 5
//

<?php
$array = range(0, 10);

// Loop over each value in the array.
foreach ($array as &$value) {
    if ($value % 2 == 0) {
        echo "$value is even.<br />\n";
    } else {
        echo "$value is odd.<br />\n";
    }
}


//////////////////////////
// Example 6
//

<?php
$firstWord = 'Hello';
$secondWord = 'World';
echo '
<!DOCTYPE html>
<html>
  <head>
    <title>'.$firstWord.' '.$secondWord.' Page!</title>
  </head>
  <body>
    <div>
      <p>'.$firstWord.' '.$secondWord.'!</p>
    </div>
  </body>
</html>';


//////////////////////////
// Example 7
//

<?php
$firstWord = 'Hello';
$secondWord = 'World';
echo <<<END
<!DOCTYPE html>
<html>
  <head>
    <title>$firstWord $secondWord Page!</title>
  </head>
  <body>
    <div>
      <p>$firstWord $secondWord!</p>
    </div>
  </body>
</html>
END;


//////////////////////////
// Example 8
//

<?php
$fileName = 'mydata.csv';

$handle = fopen($fileName, 'r');
while (($data = fgetcsv($handle)) !== False) {
    $array[] = $data
}

// Dump information about a variable
var_dump($array);


//////////////////////////
// Example 9
//

<?php
$fileName = 'mydata.txt';

$data = file($fileName);
foreach ($data as $datum) {
    echo htmlspecialchars($datum)."<br />\n";
}


//////////////////////////
// Example 10
//


<?php
$fileName = 'mydata.csv';

// PHP generally uses 'needle' before 'haystack.'
if (str_contains('_new.csv', $fileName) || (isset($newFileName))) {
    echo "Do nothing.<br />\n"
else {
    $newFileName = str_replace('.csv', '_new.csv', $fileName);
}

$characters = explode($newFileName)

var_dump($characters);


//////////////////////////
// Example 11
//

<?php
function add($x, $y) 
{ 
    return $x + $y;
}

$z = add(1, 6);
echo "$z<br />\n";

function ciera_example()
{
    echo "Hello CIERA!";
}

ciera_example();



