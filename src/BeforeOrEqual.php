<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a value preceding or equal to the given date.
 * The dates will be passed into the PHP strtotime function in order to be converted into a valid DateTime instance.
 *
 * In addition, like the after rule, the name of another field under validation may be supplied as the value of date.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-before-or-equal
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class BeforeOrEqual implements Rule
{
    public function __construct(private string $date)
    {
        //
    }

    public function getRules(): array
    {
        return ["before_or_equal:{$this->date}"];
    }
}
