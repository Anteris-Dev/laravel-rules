<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Nullable;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class NullableTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Nullable::class);
    }

    public function test_it_returns_correct_rules()
    {
        $nullable = new Nullable();

        $this->assertSame(['nullable'], $nullable->getRules());
    }
}
