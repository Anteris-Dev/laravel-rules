<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\IP;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class IPTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(IP::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['ip'], new IP());
    }
}
