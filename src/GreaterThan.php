<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be greater than the given field. The two fields must be of the same type.
 * Strings, numerics, arrays, and files are evaluated using the same conventions as the size rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-gt
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class GreaterThan implements Rule
{
    public function __construct(private string $field)
    {
        //
    }

    public function getRules(): array
    {
        return ["gt:{$this->field}"];
    }
}
