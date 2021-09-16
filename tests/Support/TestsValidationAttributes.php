<?php

namespace Anteris\Tests\LaravelRules\Support;

use Anteris\LaravelRules\Contracts\Rule;
use PHPUnit\Framework\Assert;
use ReflectionClass;

trait TestsValidationAttributes
{
    /**
     * @psalm-param class-string $class
     */
    public function assertValidationAttribute(string $class): void
    {
        $reflection = new ReflectionClass($class);

        $interfaces = $reflection->getInterfaces();

        Assert::assertArrayHasKey(Rule::class, $interfaces, "Failed asserting that {$class} implements " . Rule::class . '.');

        $attributes     = $reflection->getAttributes();
        $attributeArray = [];

        foreach ($attributes as $attribute) {
            $attributeArray[$attribute->getName()] = $attribute->getArguments();
        }

        Assert::assertArrayHasKey('Attribute', $attributeArray, "Failed asserting that {$class} is an attribute.");
        Assert::assertContains(8, $attributeArray['Attribute'], "Failed asserting that {$class} is a property attribute.");
    }

    public function assertValidationRules(array $expectedRules, Rule $rule): void
    {
        Assert::assertEqualsCanonicalizing($expectedRules, $rule->getRules());
    }

    public function assertValidationRulesNot(array $unexpectedRules, Rule $rule): void
    {
        Assert::assertNotEqualsCanonicalizing($unexpectedRules, $rule->getRules());
    }
}
