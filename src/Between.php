<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a size between the given min and max.
 * Strings, numerics, arrays, and files are evaluated in the same fashion as the size rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-between
 * @see https://laravel.com/docs/8.x/validation#rule-size
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Between implements Rule
{
    public function __construct(private int | float $min, private int | float $max)
    {
        //
    }

    public function getRules(): array
    {
        return ["between:{$this->min},{$this->max}"];
    }
}
