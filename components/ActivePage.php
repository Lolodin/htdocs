<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 19.07.2018
 * Time: 22:26
 */

class ActivePage
{
     public $activePageNumber;
    public function getNumber($number)
    {
        $this->activePageNumber = $number;
    }

} //support class