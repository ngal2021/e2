<?php

namespace HES;

// Child class
class EvenNumber extends Number
{
    public function isValid()
    {
        parent::test();
        return parent::isValid() and $this->num % 2 == 0;
    }
}