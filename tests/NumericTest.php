<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Numeric;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class NumericTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Numeric::class);
    }

    public function test_it_returns_correct_rules()
    {
        $numeric = new Numeric();

        $this->assertSame(['numeric'], $numeric->getRules());
    }
}
