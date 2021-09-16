<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\ActiveUrl;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use PHPUnit\Framework\TestCase;

class ActiveUrlTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(ActiveUrl::class);
    }

    public function test_it_returns_correct_rules()
    {
        $this->assertValidationRules(['active_url'], new ActiveUrl());
    }
}
