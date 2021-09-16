<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be numeric and must have an exact length of value.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-digits
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Digits implements Rule
{
    public function __construct(private int $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["digits:{$this->value}"];
    }
}
