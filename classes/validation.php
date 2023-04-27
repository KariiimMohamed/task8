<?php
class Validation {
    
    public static function required($value) {
        return !empty(trim($value));
    }

    public static function min($value, $min) {
        return strlen($value) >= $min;
    }

    public static function max($value, $max) {
        return strlen($value) <= $max;
    }

    public static function isString($value) {
        return is_string($value);
    }

    public static function numeric($value) {
        return is_numeric($value);
    }

    public static function isInteger($value) {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }

    public static function exists($value, $array) {
        return in_array($value, $array);
    }

    public static function fileExists($value) {
        return file_exists($value);
    }

}
?>