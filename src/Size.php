<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a size matching the given value.
 *
 * For string data, value corresponds to the number of characters.
 * For numeric data, value corresponds to a given integer value (the attribute must also have the numeric or integer rule).
 * For an array, size corresponds to the count of the array.
 * For files, size corresponds to the file size in kilobytes.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-size
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Size implements Rule
{
    public function __construct(private int $size)
    {
        //
    }

    public function getRules(): array
    {
        return ["size:{$this->size}"];
    }
}
