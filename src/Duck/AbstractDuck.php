<?php

namespace Duck;

/**
 * Duck
 */
abstract class AbstractDuck
{
    public function swim() {
        echo "I am swimming";
    }


    abstract public function display();
}

