<?
// strict requirement following  type notation on function
declare(strict_types=1);

// create a function
function getUser(string $name) : string {
   for ($v = 0; $v <= 10; $v++) {
      $name .= "Hello world";  # . is used for concantenation
   }
  return "Today's a new day $name";
}

echo getUser("Friday");

// passing argument as reference. The reason is the ampersand infront of the value
function add_five(&$value) {
  $value += 8;
}

$num = 4;
add_five($num);
// the value of $num will be 12 even though it's not declared on the function.
echo $num;

?>
