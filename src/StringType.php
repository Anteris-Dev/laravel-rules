<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a string.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-string
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class StringType implements Rule
{
    public function getRules(): array
    {
        return ['string'];
    }
}
