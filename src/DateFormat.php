<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must match the given format.
 * You should use either date or date_format when validating a field, not both.
 * This validation rule supports all formats supported by PHP's DateTime class.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-date-format
 * @see https://laravel.com/docs/8.x/validation#rule-date
 * @see https://www.php.net/manual/en/class.datetime.php
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class DateFormat implements Rule
{
    public function __construct(private string $format)
    {
        //
    }

    public function getRules(): array
    {
        return ["date_format:{$this->format}"];
    }
}
