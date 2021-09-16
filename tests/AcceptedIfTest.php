<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\AcceptedIf;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class AcceptedIfTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(AcceptedIf::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['accepted_if:name,Aidan'],
            new AcceptedIf('name', 'Aidan')
        );

        $this->assertValidationRules(
            ['accepted_if:other_field,something'],
            new AcceptedIf('other_field', 'something')
        );
    }
}
