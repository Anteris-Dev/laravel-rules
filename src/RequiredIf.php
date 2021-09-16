<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be present and not empty if the anotherfield field is equal to any value.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-required-if
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class RequiredIf implements Rule
{
    private array $values;

    public function __construct(private string $field, string ...$values)
    {
        $this->values = $values;
    }

    public function getRules(): array
    {
        return [
            "required_if:{$this->field}," . implode(',', $this->values),
        ];
    }
}
