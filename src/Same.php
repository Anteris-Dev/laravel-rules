<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The given field must match the field under validation.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-same
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Same implements Rule
{
    public function __construct(private string $fieldName)
    {
        //
    }

    public function getRules(): array
    {
        return ["same:{$this->fieldName}"];
    }
}
