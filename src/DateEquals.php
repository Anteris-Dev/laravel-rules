<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be equal to the given date.
 * The dates will be passed into the PHP strtotime function in order to be converted into a valid DateTime instance.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-date-equals
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class DateEquals implements Rule
{
    public function __construct(private string $date)
    {
        //
    }

    public function getRules(): array
    {
        return ["date_equals:{$this->date}"];
    }
}
