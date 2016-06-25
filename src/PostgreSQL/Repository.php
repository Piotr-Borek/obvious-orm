<?php
namespace ObviousORM\PostgreSQL;

class Repository
{
    private $table;

    private $connection;

    private $conditions = [];

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    public function getObjects()
    {

    }

    public function addCondition($sql)
    {
        $this->conditions[] = $sql;
    }



}
