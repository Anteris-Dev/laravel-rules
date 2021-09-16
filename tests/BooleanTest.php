<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Boolean;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Boolean::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['boolean'], new Boolean());
    }
}
