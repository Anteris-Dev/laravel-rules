<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation will be excluded from the request data
 * returned by the validate and validated methods.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-exclude
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Exclude implements Rule
{
    public function getRules(): array
    {
        return ['exclude'];
    }
}