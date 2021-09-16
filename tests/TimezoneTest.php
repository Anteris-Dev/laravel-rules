<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Timezone;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class TimezoneTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Timezone::class);
    }

    public function test_it_returns_correct_rules()
    {
        $timezone = new Timezone();

        $this->assertIsArray($timezone->getRules());
        $this->assertSame(['timezone'], $timezone->getRules());
    }
}
