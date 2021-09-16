<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be an IP address.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-ip
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IP implements Rule
{
    public function getRules(): array
    {
        return ['ip'];
    }
}
