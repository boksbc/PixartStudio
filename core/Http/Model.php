<?php

namespace Pixel\core\Http;

use Pixel\core\Database\Database;

class Model extends Database
{
    protected string $sql = "";
    protected mixed $attribute;
    protected $stmt;

    public function isInputValid($input)
    {
        if (empty($input)) {
            return true;
        }
        return false;
    }

    public function isChecked($value)
    {
        if (isset($value)) {
            return true;
        }
        return false;
    }

    public function isEmailValid($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function isLengthValid(string $input, int $length)
    {
        if (strlen($input) < $length) {
            return true;
        }
        return false;
    }

    public function insert( string $table, array $data)
    {
        $keys = array_keys($data);
        $column = implode(', ', $keys);
        $value = implode(', :', $keys);

        $sql = "INSERT INTO $table ($column) VALUES (:$value)";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute($data);
        return true;
    }

    public function select(string $table, mixed $attributes)
    {
        if (is_array($attributes)) {
            $keys = array_values($attributes);
            $attributes = implode(', ', $keys);
        }

        $this->sql = "SELECT $attributes FROM $table";
        return $this;
    }

    public function update(string $table, array $data)
    {
        $keys = array_keys($data);
        $this->sql = "UPDATE $table SET";
        $this->sql .= " $keys[0] = :$keys[0]";
        for ($i = 1; $i < count($data); $i++) {
            $this->sql .= ", $keys[$i] = :$keys[$i]";
        }
        return $this;
    }

    public function delete(string $table, array $data,  array $attribute)
    {
        $sql = "DELETE FROM $table";
        $sql .= " WHERE $attribute[0]";
        for ($i = 1; $i < count($attribute); $i++) {
            $sql .= " AND $attribute[$i]";
        }

        $this->connect()->prepare($sql)->execute($data);
        return true;
    }

    public function where(array $attribute)
    {
        if (is_array($attribute)) {
            $this->sql .= " WHERE $attribute[0] = :$attribute[0]";
            for ($i = 1; $i < count($attribute); $i++) {
                $this->sql .= " AND $attribute[$i] = :$attribute[$i]";
            }
            $this->attribute = $attribute;
        }
        return $this;
    }

    public function orderby(string $attribute, string $keyword): static
    {
        $this->sql .= " ORDER BY $attribute $keyword";
        return $this;
    }

    public function execute($data = []): static
    {
        $this->stmt = $this->connect()->prepare($this->sql);

        if (!empty($data)) {
            $this->stmt->execute($data);
        } else {
            $this->stmt->execute();
        }
        return $this;
    }

    public function fetch() :mixed
    {
        $count = $this->stmt->rowCount();
        if ($count > 0) {
            return $this->stmt->fetch();
        }
        return false;
    }
}