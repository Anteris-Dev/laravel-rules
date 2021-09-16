<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\InArray;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class InArrayTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(InArray::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['in_array:field_name'], new InArray('field_name'));
    }
}
