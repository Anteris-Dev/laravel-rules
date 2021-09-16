<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Prohibits;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ProhibitsTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Prohibits::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['prohibits:somefield'], new Prohibits('somefield'));
        $this->assertValidationRules(['prohibits:somefield,someotherfield'], new Prohibits('somefield', 'someotherfield'));
    }
}