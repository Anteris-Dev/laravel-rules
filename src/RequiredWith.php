<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be present and not empty
 * only if any of the other specified fields are present and not empty.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-required-with
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class RequiredWith implements Rule
{
    private array $fields;

    public function __construct(string ...$fields)
    {
        $this->fields = $fields;
    }

    public function getRules(): array
    {
        return [
            'required_with:' . implode(',', $this->fields),
        ];
    }
}
