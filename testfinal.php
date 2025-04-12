<?php
try{
    class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n";
   }
   
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "ChildClass::moreTesting() called\n";
   }
}
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>