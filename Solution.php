<?php
// Solution.php

class Solution {
    private static $macros = [];

    public static function macro($name, $fn) {
        self::$macros[$name] = $fn;
    }

    public function __call($name, $arguments) {
        if (isset(self::$macros[$name])) {
            return call_user_func_array(self::$macros[$name]->bindTo($this, self::class), $arguments);
        }
        throw new Exception("Method {$name} not found.");
    }
}
