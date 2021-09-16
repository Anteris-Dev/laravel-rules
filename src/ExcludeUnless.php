<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation will be excluded from the request data returned by
 * the validate and validated methods unless anotherfield's field is equal to value.
 *
 * If value is null (exclude_unless:name,null), the field under validation will be
 * excluded unless the comparison field is null or the comparison field is
 * missing from the request data.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-exclude-unless
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ExcludeUnless implements Rule
{
    public function __construct(private string $field, private string $value)
    {
        //
    }

    public function getRules(): array
    {
        return ["exclude_unless:{$this->field},{$this->value}"];
    }
}
