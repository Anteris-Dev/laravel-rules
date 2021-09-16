<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Accepted;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class AcceptedTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Accepted::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['accepted'], new Accepted());
    }
}
