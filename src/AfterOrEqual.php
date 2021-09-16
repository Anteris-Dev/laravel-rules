<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a value after or equal to the given date. For more information, see the after rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-after-or-equal
 * @see https://laravel.com/docs/8.x/validation#rule-after
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class AfterOrEqual implements Rule
{
    public function __construct(private string $date)
    {
        //
    }

    public function getRules(): array
    {
        return ["after_or_equal:{$this->date}"];
    }
}
