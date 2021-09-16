<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be an IPv6 address.
 *
 * @see https://laravel.com/docs/8.x/validation#ipv6
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IPv6 implements Rule
{
    public function getRules(): array
    {
        return ['ipv6'];
    }
}
