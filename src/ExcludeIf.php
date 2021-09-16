<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation will be excluded from the request data returned by
 * the validate and validated methods if the anotherfield field is equal to value.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-exclude-if
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ExcludeIf implements Rule
{
    public function __construct(private string $field, private string $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["exclude_if:{$this->field},{$this->value}"];
    }
}
