<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be entirely alpha-numeric characters.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-alpha-num
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class AlphaNumeric implements Rule
{
    public function getRules(): array
    {
        return ['alpha_num'];
    }
}
