<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation may be null.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-nullable
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Nullable implements Rule
{
    public function getRules(): array
    {
        return ['nullable'];
    }
}
