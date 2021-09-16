<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be entirely alphabetic characters.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-alpha
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Alpha implements Rule
{
    public function getRules(): array
    {
        return ['alpha'];
    }
}
