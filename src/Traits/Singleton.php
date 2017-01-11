<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 11-1-2017
 * Time: 18:43
 */

namespace Redbox\Rules\Traits;

trait Singleton {
    /**
     * private construct, generally defined by using class
     */

    public static function getInstance() {
        static $_instance = NULL;
        $class = __CLASS__;
        return $_instance ?: $_instance = new $class;
    }

    public function __clone() {
        trigger_error('Cloning '.__CLASS__.' is not allowed.',E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Unserializing '.__CLASS__.' is not allowed.',E_USER_ERROR);
    }
}