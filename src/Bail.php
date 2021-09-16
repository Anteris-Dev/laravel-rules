<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * Stop running validation rules for the field after the first validation failure.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-bail
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Bail implements Rule
{
    public function getRules(): array
    {
        return ['bail'];
    }
}
