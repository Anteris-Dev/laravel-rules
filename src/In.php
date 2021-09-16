<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;
use Illuminate\Validation\Rules\In as BaseIn;

/**
 * The field under validation must be included in the given list of values.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-in
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class In implements Rule
{
    public function __construct(private array $values)
    {
        //
    }

    public function getRules(): array
    {
        return [new BaseIn($this->values)];
    }
}
