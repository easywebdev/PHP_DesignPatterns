<?php


namespace App\Creational\Singleton;


class Math
{
    private static $instance;

    private function __construct() {}    // Hide constructor

    private function __clone() {}        // Disable cloning

    private function __wakeup() {}       // Disable deserialization

    /**
     * @return Math
     */
    public static function getInstance() : Math
    {
        if(is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * @param float $A
     * @param float $B
     * @return float
     */
    public function sumAB(float $A, float $B) : float
    {
        return $A + $B;
    }
}