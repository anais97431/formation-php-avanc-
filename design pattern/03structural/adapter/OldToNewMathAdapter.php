<?php
include __DIR__ .'/OldMath.php';


class OldToNewMathAdapter
{

    private $oldMath;

    public function __construct()
    {
       $this->oldMath = new OldMath(); 
    }

    public function pow($exponent, $basis=10)
    {
        $this->oldMath->oldPow($basis, $exponent);
    }
}