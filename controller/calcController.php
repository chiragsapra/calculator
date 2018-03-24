<?php
include '../model/Calculator.php';

class calcController{

  public $num1;
  public $num2;
  public $opt;
  public $total;

  public function calc(){

    $num1 = isset($_GET['num1'])?$_GET['num1']:0;
    $num2 = isset($_GET['num2'])?$_GET['num2']:0;
    $opt = isset($_GET['opt'])?$_GET['opt']:'';
      
      if(!is_numeric($num1) || !is_numeric($num2)){
          
          $total = "invalid";
          
      } else {
          
          switch ($opt) {
                  
                case 'Addition':
                    $operation = new Addition($num1, $num2);
                    $total = $operation->result();
                    break;

                case 'Subtraction':
                    $operation = new Subtraction($num1, $num2);
                    $total = $operation->result();
                    break;

                case 'Multiplication':
                    $operation = new Multiplication($num1, $num2);
                    $total = $operation->result();
                    break;

                case 'Division':
                    if($num2 == 0){
                        $total = "infinity";  
                    }else{
                        $operation = new Division($num1, $num2);
                        $total = round($operation->result(), 2);
                    }
                    break;

                default:
                    $total = 0;
                    break;
            }
      }
      
     include '../view/result.php';
  }

}
