<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be numeric.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-numeric
 * @see https://www.php.net/manual/en/function.is-numeric.php
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Numeric implements Rule
{
    public function getRules(): array
    {
        return ['numeric'];
    }
}
