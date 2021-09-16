<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be an integer.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-integer
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IntegerType implements Rule
{
    public function getRules(): array
    {
        return ['integer'];
    }
}
