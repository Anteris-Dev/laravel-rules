<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\LessThanOrEqualTo;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class LessThanOrEqualToTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(LessThanOrEqualTo::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['lte:some_field'],
            new LessThanOrEqualTo('some_field')
        );

        $this->assertValidationRules(
            ['lte:some_other_field'],
            new LessThanOrEqualTo('some_other_field')
        );
    }
}
