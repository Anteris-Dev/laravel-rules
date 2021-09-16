<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a matching field of {field}_confirmation.
 * For example, if the field under validation is password, a matching password_confirmation field must be present in the input.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-confirmed
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Confirmed implements Rule
{
    public function getRules(): array
    {
        return ['confirmed'];
    }
}
