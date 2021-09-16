<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\NotRegex;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class NotRegexTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(NotRegex::class);
    }

    public function test_it_returns_correct_rules()
    {
        // 10-digit phone number.
        $notRegex = new NotRegex('/^(\d{10})$/');

        $this->assertSame(['not_regex:/^(\d{10})$/'], $notRegex->getRules());
    }
}
