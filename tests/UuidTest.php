<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Uuid;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class UuidTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Uuid::class);
    }

    public function test_it_returns_correct_rules()
    {
        $uuid = new Uuid();

        $this->assertIsArray($uuid->getRules());
        $this->assertSame(['uuid'], $uuid->getRules());
    }
}
