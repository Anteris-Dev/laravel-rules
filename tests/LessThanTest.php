<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\LessThan;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class LessThanTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(LessThan::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['lt:some_field'], new LessThan('some_field'));
        $this->assertValidationRules(['lt:some_other_field'], new LessThan('some_other_field'));
    }
}
