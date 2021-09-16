<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Image;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Image::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['image'], new Image());
    }
}
