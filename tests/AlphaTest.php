<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Alpha;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class AlphaTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Alpha::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['alpha'], new Alpha());
    }
}
