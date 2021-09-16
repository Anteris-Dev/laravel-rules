<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a value after a given date.
 * The dates will be passed into the strtotime PHP function in order to be converted to a valid DateTime instance.
 *
 * Instead of passing a date string to be evaluated by strtotime, you may also specify another field to compare against the date.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-after
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class After implements Rule
{
    public function __construct(private string $date)
    {
        //
    }

    public function getRules(): array
    {
        return ["after:{$this->date}"];
    }
}
