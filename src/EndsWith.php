<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must end with one of the given values.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-ends-with
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class EndsWith implements Rule
{
    private array $validEndingStrings;

    public function __construct(string ...$string)
    {
        $this->validEndingStrings = $string;
    }

    public function getRules(): array
    {
        return ['ends_with:' . implode(',', $this->validEndingStrings)];
    }
}
