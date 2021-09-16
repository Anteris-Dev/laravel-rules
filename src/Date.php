<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a valid, non-relative date according to the strtotime PHP function.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-date
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Date implements Rule
{
    public function getRules(): array
    {
        return ['date'];
    }
}
