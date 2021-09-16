<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a valid RFC 4122 (version 1, 3, 4, or 5) universally unique identifier (UUID).
 *
 * @see https://laravel.com/docs/8.x/validation#rule-uuid
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Uuid implements Rule
{
    public function getRules(): array
    {
        return ['uuid'];
    }
}
