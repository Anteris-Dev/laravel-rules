<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Between;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class BetweenTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Between::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['between:3,12'], new Between(3, 12));
        $this->assertValidationRules(['between:3.5,12.1'], new Between(3.5, 12.1));
    }
}
