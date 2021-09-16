<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a valid URL.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-url
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Url implements Rule
{
    public function getRules(): array
    {
        return ['url'];
    }
}
