<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\ProhibitedUnless;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ProhibitedUnlessTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(ProhibitedUnless::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['prohibited_unless:name,Aidan'],
            new ProhibitedUnless('name', 'Aidan')
        );

        $this->assertValidationRules(
            ['prohibited_unless:name,Charles,Howard,Lesley'],
            new ProhibitedUnless('name', 'Charles', 'Howard', 'Lesley')
        );
    }
}
