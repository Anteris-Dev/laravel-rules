<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must exist in anotherfield's values.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-in-array
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class InArray implements Rule
{
    public function __construct(private string $field)
    {
        //
    }

    public function getRules(): array
    {
        return ["in_array:{$this->field}"];
    }
}