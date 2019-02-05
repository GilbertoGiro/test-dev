<?php

namespace App\Rule;

interface RuleInterface
{
    /**
     * Method to apply validation
     *
     * @param string $key
     * @param $value
     * @return bool
     */
    public function validate(string $key, $value): bool;
}