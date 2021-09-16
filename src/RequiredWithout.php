<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be present and not empty
 * only when any of the other specified fields are empty or not present.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-required-without
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class RequiredWithout implements Rule
{
    private array $fields;

    public function __construct(string ...$fields)
    {
        $this->fields = $fields;
    }

    public function getRules(): array
    {
        return [
            'required_without:' . implode(',', $this->fields),
        ];
    }
}
