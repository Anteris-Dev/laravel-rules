<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a minimum value.
 * Strings, numerics, arrays, and files are evaluated in the same fashion as the size rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-min
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Min implements Rule
{
    public function __construct(private int $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["min:{$this->value}"];
    }
}
