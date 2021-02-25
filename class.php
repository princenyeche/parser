<?php

// Parent class
class Controller {
  // Properties
  public $name;
  public $buttons = "A button";
  public $shape;
  public $style = "A shape";
  // constants
  const SETTINGS = "A Welcome message when called";
  
  // automatic instantiation - constructor
  public function __construct($name, $shape) {
         // attributes of the methods
         $this->name = $name;
         $this->shape = $shape;
    
  }
  
  // runs at the end of the class
  public function __destruct() {
  
    echo "<br />This {$this->name} has a {$this->shape}"; 
  
  }
  
  // protected method, can be called within this class or a child class
  protected function alignment() {
   echo "This is a protected function of $this->buttons";
  }
  
  // private method, can be called within this class only
  private function design() {
    echo $this->alignment() . "<br />";
    echo self::SETTINGS;
  
  }
  
  public function getter() {
  
     return $this->design();
  }
  
}

// child class
class Game extends Controller {
   public function remote() {
      echo "<br />" . $this->buttons . "<br/>";
      return "This {$this->name} is the remote controller <br/>";
   }

}

// instantiate the class
$control = new Game("MyGame", "Square");
// call a method in the class
echo $control->getter();
echo $control->remote();

?>
