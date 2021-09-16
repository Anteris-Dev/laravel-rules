<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\File;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(File::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['file'], new File());
    }
}
