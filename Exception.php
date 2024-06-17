<!-- <?php
function errorCheck($number){
    if($number < 0){
        throw new Exception("Number cannot be negative");
        
    }
    echo $number . " is positive";
}

try{
    errorCheck(5);
}
catch(Exception $e){
    echo $e->getLine();
} 
?> -->
<?php
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is having negative radius';
    return $errorMsg;
  }
}

try {
  $r = 5;
  if ($r < 0) {
    throw new customException($r);
    }
    echo 'Radius is: '.$r . "<br>";
    echo 'Area is: '. 3.14*$r*$r;
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}
?>