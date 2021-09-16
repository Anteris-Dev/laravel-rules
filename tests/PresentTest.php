<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Present;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class PresentTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_validation_attribute()
    {
        $this->assertValidationAttribute(Present::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['present'],
            new Present()
        );
    }
}
