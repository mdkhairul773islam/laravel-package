<?php 

namespace Khairul\Fm;

class Fm {
    public static function event (string $name, float $val, ?string $dimension = null ){
        return $name ."- ".$val;
    }
}