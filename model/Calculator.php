<?php

abstract class Numbers {

    private $x = 0;
    private $y = 0;

    public abstract function result();
}

class Addition extends Numbers {

  public function __construct($x, $y)
  {
    $this -> x = $x;
    $this -> y = $y;
  }

  public function result()
  {
    return $this -> x + $this -> y;
  }
}

class Subtraction extends Numbers {

  public function __construct($x, $y)
  {
    $this -> x = $x;
    $this -> y = $y;
  }

  public function result()
  {
    return $this -> x - $this -> y;
  }
}

class Multiplication extends Numbers {

  public function __construct($x, $y)
  {
    $this -> x = $x;
    $this -> y = $y;
  }

  public function result()
  {
    return $this -> x * $this -> y;
  }
}

class Division extends Numbers {

  public function __construct($x, $y)
  {
    $this -> x = $x;
    $this -> y = $y;
  }

  public function result()
  {
    return $this -> x / $this -> y;
  }
}
