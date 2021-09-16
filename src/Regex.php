<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must match the given regular expression.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-regex
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Regex implements Rule
{
    public function __construct(private string $pattern)
    {
        //
    }

    public function getRules(): array
    {
        return ["regex:{$this->pattern}"];
    }
}
