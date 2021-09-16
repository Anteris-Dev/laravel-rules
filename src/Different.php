<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a different value than field.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-different
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Different implements Rule
{
    public function __construct(private string $field)
    {
        //
    }

    public function getRules(): array
    {
        return ["different:{$this->field}"];
    }
}
