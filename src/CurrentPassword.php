<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must match the authenticated user's password.
 * You may specify an authentication guard using the rule's first parameter.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-current-password
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class CurrentPassword implements Rule
{
    public function __construct(private ?string $guard = null)
    {
        //
    }

    public function getRules(): array
    {
        if (! is_null($this->guard)) {
            return ["current_password:{$this->guard}"];
        }

        return ['current_password'];
    }
}
