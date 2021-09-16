<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation may have alpha-numeric characters, as well as dashes and underscores.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-alpha-dash
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class AlphaNumericDash implements Rule
{
    public function getRules(): array
    {
        return ['alpha_dash'];
    }
}
