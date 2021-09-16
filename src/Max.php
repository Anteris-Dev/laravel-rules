<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be less than or equal to a maximum value.
 * Strings, numerics, arrays, and files are evaluated in the same fashion as the size rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-max
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Max implements Rule
{
    public function __construct(private int $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["max:{$this->value}"];
    }
}
