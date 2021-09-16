<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be empty or not present.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-prohibited
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Prohibited implements Rule
{
    public function getRules(): array
    {
        return ['prohibited'];
    }
}
