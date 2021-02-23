<?

// Parent class
class Controller {
  // Properties
  public $name;
  public $buttons;
  public $shape;
  public $style;
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
  
    echo "This {$this->name} has a {$this->shape}"; 
  
  }
  
  // protected method, can be called within this class or a child class
  protected function alignment() {
   echo "This is a protected function of self::$button";
  }
  
  // private method, can be called within this class only
  private function design() {
    echo self::$style;
    echo self::SETTINGS;
  
  }
  
}

// child class
class Game extends Controller {
   public function remote() {
      echo parent::$button;
      return "This $this->name is the remote controller";
   }

}

// instantiate the class
$control = new Controller("MyGame", "Square");
// call a method in the class
echo $control->alignment();

?>
