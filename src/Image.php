<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The file under validation must be an image (jpg, jpeg, png, bmp, gif, svg, or webp).
 *
 * @see https://laravel.com/docs/8.x/validation#rule-image
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Image implements Rule
{
    public function getRules(): array
    {
        return ['image'];
    }
}
