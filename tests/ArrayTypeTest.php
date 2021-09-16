<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\ArrayType;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ArrayTypeTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(ArrayType::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['array'], new ArrayType());
        $this->assertValidationRules(['array:id,first_name'], new ArrayType('id', 'first_name'));
    }
}
