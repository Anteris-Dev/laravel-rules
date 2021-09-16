<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be "yes", "on", 1, or true if another field under validation is equal to a specified value.
 * This is useful for validating "Terms of Service" acceptance or similar fields.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-accepted-if
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class AcceptedIf implements Rule
{
    public function __construct(private string $field, private string $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["accepted_if:{$this->field},{$this->value}"];
    }
}
