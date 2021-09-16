<?php

namespace Anteris\Tests\LaravelRules;

use Anteris\LaravelRules\Exists;
use Anteris\Tests\LaravelRules\Support\TestsValidationAttributes;
use Illuminate\Validation\Rules\Exists as BaseExists;
use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    use TestsValidationAttributes;

    public function test_it_is_a_validation_attribute()
    {
        $this->assertValidationAttribute(Exists::class);
    }

    public function test_it_returns_correct_rules()
    {
        $exists = new Exists('users', 'id');

        $this->assertIsArray($exists->getRules());
        $this->assertCount(1, $exists->getRules());
        $this->assertContainsOnlyInstancesOf(BaseExists::class, $exists->getRules());
    }

    public function test_it_returns_correct_rules_with_where()
    {
        $callback = function ($query) {
            return $query->where('first_name', 'Aidan');
        };

        $exists = new Exists('users', 'id', 'test', $callback);

        $this->assertIsArray($exists->getRules());
        $this->assertCount(1, $exists->getRules());
        $this->assertContainsOnlyInstancesOf(BaseExists::class, $exists->getRules());

        /** @var BaseExists $query */
        $query = $exists->getRules()[0];

        $this->assertSame('exists:test.users,id', $query->__toString());
        $this->assertCount(1, $query->queryCallbacks());
        $this->assertSame($callback, $query->queryCallbacks()[0]);
    }
}
