<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be an IPv4 address.
 *
 * @see https://laravel.com/docs/8.x/validation#ipv4
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IPv4 implements Rule
{
    public function getRules(): array
    {
        return ['ipv4'];
    }
}
