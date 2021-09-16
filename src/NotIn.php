<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;
use Illuminate\Validation\Rules\NotIn as BaseNotIn;

/**
 * The field under validation must not be included in the given list of values.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-not-in
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class NotIn implements Rule
{
    public function __construct(private array $values)
    {
        //
    }

    public function getRules(): array
    {
        return [new BaseNotIn($this->values)];
    }
}
