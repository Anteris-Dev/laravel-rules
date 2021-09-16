<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a multiple of value.
 *
 * @see https://laravel.com/docs/8.x/validation#multiple-of
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MultipleOf implements Rule
{
    public function __construct(private int $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["multiple_of:{$this->value}"];
    }
}
