<?php

namespace Redbox\Rules;
use Redbox\Rules\RuleSet;

class Rule
{
    use Traits\Singleton;

    /**
     * @var RuleSet
     */
    private $set;

    /**
     * @var callable
     */
    private $then;

    /**
     * @var callable
     */
    private $else;

    /**
     * Rule constructor.
     */
    public function __construct()
    {
        $this->set = new RuleSet();
    }

    public function addRule(OperatorInterface $r) {
        $this->set[] = $r;
    }

    /**
     * Undocumented function
     *
     * @param array $rules
     * @return void
     */
    public static function all($rules = [])
    {
        $instance = self::getInstance();
        if (is_array($rules) == true) {
            foreach ($rules as $rule) {
                $instance->addRule($rule);
            }
        }
        return $instance;
    }

    public function then(callable $func) {
        $this->then = $func;
        return self::getInstance();
    }

    public function run()
    {
        if (1 == 1) {
            return call_user_func($this->then);
        }
    }
}