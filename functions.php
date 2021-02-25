<?
// strict requirement following  type notation on function
declare(strict_types=1);

// create a function
function getUser(string $name) : string {
   for ($v = 0, $v <= 10, $v++) {
      $name += "Hello world";
   }
  return "Today's a new day $name";
}

getUser("Friday");

// passing argument as reference. The reason is the ampersand infront of the value
function add_five(&$value) {
  $value += 8;
}

$num = 4;
add_five($num);
// the value of $num will be 12 even though it declared on the function.
echo $num;

?>
