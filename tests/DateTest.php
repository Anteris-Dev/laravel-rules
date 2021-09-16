<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Date;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Date::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['date'], new Date());
    }
}
