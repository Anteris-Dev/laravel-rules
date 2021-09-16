<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Prohibited;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ProhibitedTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Prohibited::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['prohibited'], new Prohibited());
    }
}
