<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The file under validation must have a MIME type corresponding to one of the listed extensions.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-mimes
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Mimes implements Rule
{
    private array $mimes;

    public function __construct(string ...$mimes)
    {
        $this->mimes = $mimes;
    }

    public function getRules(): array
    {
        return ['mimes:' . implode(',', $this->mimes)];
    }
}
