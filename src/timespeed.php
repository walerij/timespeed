<?php 

namespace walerij;

class timespeed{
    
    function timespeed($s, $v)
    {
        $time_=0;
        if($v!=0)
            $time_=$s/$v;

        return "Время прохождения пути $s км со скоростью $v км/ч : ".$time_." ч ";

    }
    
}



