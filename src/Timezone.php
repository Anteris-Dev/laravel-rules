<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must be a valid timezone identifier according to the timezone_identifiers_list PHP function.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-timezone
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Timezone implements Rule
{
    public function getRules(): array
    {
        return ['timezone'];
    }
}
