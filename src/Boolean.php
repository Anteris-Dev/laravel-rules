<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and "0".
 *
 * @see https://laravel.com/docs/8.x/validation#rule-boolean
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Boolean implements Rule
{
    public function getRules(): array
    {
        return ['boolean'];
    }
}
