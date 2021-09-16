<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be "yes", "on", 1, or true.
 * This is useful for validating "Terms of Service" acceptance or similar fields.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-accepted
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Accepted implements Rule
{
    public function __construct()
    {
        //
    }

    public function getRules(): array
    {
        return ['accepted'];
    }
}
