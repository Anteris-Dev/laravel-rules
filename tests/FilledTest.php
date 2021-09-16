<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Filled;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class FilledTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Filled::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['filled'], new Filled());
    }
}
