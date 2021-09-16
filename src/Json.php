<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a valid JSON string.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-json
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Json implements Rule
{
    public function getRules(): array
    {
        return ['json'];
    }
}
