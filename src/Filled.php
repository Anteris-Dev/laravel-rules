<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must not be empty when it is present.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-filled
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Filled implements Rule
{
    public function getRules(): array
    {
        return ['filled'];
    }
}
