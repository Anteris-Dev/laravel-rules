<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be present in the input data but can be empty.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-present
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Present implements Rule
{
    public function getRules(): array
    {
        return ['present'];
    }
}
