<?php

namespace Anteris\LaravelRules;

use Anteris\LaravelRules\Contracts\Rule;
use Attribute;
use Closure;
use Illuminate\Validation\Rules\Exists as BaseExists;

/**
 * The field under validation must exist in a given database table.
 *
 * @see https://laravel.com/docs/8.x/validation#rule-exists
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Exists implements Rule
{
    public function __construct(
        private string $table,
        private string $column = 'NULL',
        private ?string $connection = null,
        private ?Closure $where = null
    ) {
        //
    }

    public function getRules(): array
    {
        $rule = new BaseExists(
            ($this->connection) ? "{$this->connection}.{$this->table}" : $this->table,
            $this->column
        );

        if ($this->where) {
            $rule->where($this->where);
        }

        return [$rule];
    }
}
