<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be empty or not present unless the anotherfield field is equal to any value.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-prohibited-unless
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ProhibitedUnless implements Rule
{
    private array $values;

    public function __construct(private string $field, string ...$values)
    {
        $this->values = $values;
    }

    public function getRules(): array
    {
        return [
            "prohibited_unless:{$this->field}," . implode(',', $this->values),
        ];
    }
}