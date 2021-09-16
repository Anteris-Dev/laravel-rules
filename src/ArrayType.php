<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a PHP array. When additional values are provided to the array rule,
 * each key in the input array must be present within the list of values provided to the rule.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-array
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ArrayType implements Rule
{
    private array $keys;

    public function __construct(string ...$keys)
    {
        $this->keys = $keys;
    }

    public function getRules(): array
    {
        if (empty($this->keys)) {
            return ['array'];
        }

        return ['array:' . implode(',', $this->keys)];
    }
}
