<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Required;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class RequiredTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Required::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['required'],
            new Required()
        );
    }
}
