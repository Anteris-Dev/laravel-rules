<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;

/**
 * The file under validation must match one of the given MIME types.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-mimetypes
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MimeTypes implements Rule
{
    private array $mimeTypes;

    public function __construct(string ...$mimeTypes)
    {
        $this->mimeTypes = $mimeTypes;
    }

    public function getRules(): array
    {
        return ['mimetypes:' . implode(',', $this->mimeTypes)];
    }
}
