<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be numeric and must have a length between the given min and max.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-digits-between
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class DigitsBetween implements Rule
{
    public function __construct(private int $min, private int $max)
    {
        //
    }

    public function getRules(): array
    {
        return ["digits_between:{$this->min},{$this->max}"];
    }
}
