<?php

namespace App\Database;

class SqlQueryBuilder
{
    private $fields = '*';
    private $table;
    private $conditions;

    public function select($fields)
    {
        if (\is_array($fields)) {
            $this->fields = \implode(',', $fields);
        } else {
            $this->fields = $fields;
        }

        return $this;
    }

    public function from($tableName)
    {
        $this->table = $tableName;

        return $this;
    }

    public function where($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getQuery()
    {
        $sql = \sprintf('SELECT %s ', $this->fields);

        if (empty($this->table)) {
            throw new \LogicException('You should specify table name');
        }

        $sql .= \sprintf('FROM %s', $this->table);

        if (!empty($this->conditions)) {
            $sql .= \sprintf( ' WHERE %s', $this->conditions);
        }

        $sql .= ';';

        return $sql;
    }
}
