<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * If the field under validation is present, no fields in anotherfield can be present, even if empty.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-prohibits
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Prohibits implements Rule
{
    private array $fields;

    public function __construct(string ...$fields)
    {
        $this->fields = $fields;
    }

    public function getRules(): array
    {
        return ['prohibits:' . implode(',', $this->fields)];
    }
}