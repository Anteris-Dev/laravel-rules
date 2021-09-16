<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must start with one of the given values.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-starts-with
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class StartsWith implements Rule
{
    private array $validStartingStrings;

    public function __construct(string ...$string)
    {
        $this->validStartingStrings = $string;
    }

    public function getRules(): array
    {
        return ['starts_with:' . implode(',', $this->validStartingStrings)];
    }
}
