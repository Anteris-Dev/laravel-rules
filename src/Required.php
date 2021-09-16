<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be present in the input data and not empty.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-required
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Required implements Rule
{
    public function getRules(): array
    {
        return ['required'];
    }
}
