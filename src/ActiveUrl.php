<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The field under validation must have a valid A or AAAA record according to the dns_get_record PHP function.
 * The hostname of the provided URL is extracted using the parse_url PHP function before being passed to dns_get_record.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-active-url
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ActiveUrl implements Rule
{
    public function getRules(): array
    {
        return ['active_url'];
    }
}
