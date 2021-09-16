<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\ExcludeIf;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ExcludeIfTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(ExcludeIf::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(
            ['exclude_if:name,Aidan'],
            new ExcludeIf('name', 'Aidan')
        );

        $this->assertValidationRules(
            ['exclude_if:email,null'],
            new ExcludeIf('email', 'null')
        );
    }
}
