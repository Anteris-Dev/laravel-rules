<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\RequiredUnless;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class RequiredUnlessTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(RequiredUnless::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['required_unless:name,Aidan'],
            new RequiredUnless('name', 'Aidan')
        );

        $this->assertValidationRules(
            ['required_unless:name,Anthony,Fred,Howard'],
            new RequiredUnless('name', 'Anthony', 'Fred', 'Howard')
        );
    }
}
