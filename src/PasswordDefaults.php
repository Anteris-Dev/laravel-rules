<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;
use Illuminate\Validation\Rules\Password as BasePassword;

/**
 * Validates a passwords complexity according to default password rules.
 *
 * @see https://laravel.com/docs/8.x/validation#defining-default-password-rules
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class PasswordDefaults implements Rule
{
    public function getRules(): array
    {
        return [BasePassword::default()];
    }
}
