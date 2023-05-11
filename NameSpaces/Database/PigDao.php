<?php

namespace NS\Database;

require_once 'Database.php';
require_once 'Pig.php';

class PigDao
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database(); // Violates Dependency Inversion Principle
    }

    public function fetchAll(): array
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour`, `species` '
            . 'FROM `pigs`; ';

        $query = $this->db->getPdo()->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $pigs = [];
        foreach ($rows as $row) {
            $pig = new Pig($row['name'], $row['weight'], $row['colour'], $row['species'], $row['id']);
            $pigs[] = $pig;
        }

        return $pigs;
    }

    public function fetch(int $pigId): Pig
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour`, `species` '
            . 'FROM `pigs` '
            . 'WHERE `id` = :id; ';

        $values = [':id' => $pigId];

        $query = $this->db->getPdo()->prepare($sql);
        $query->execute($values);
        $pig = $query->fetch();

        return new Pig($pig['name'], $pig['weight'], $pig['colour'], $pig['species'], $pig['id']);
    }

    public function add(Pig $pig): int
    {
        $sql = 'INSERT INTO `pigs` (`name`, `weight`, `colour`, `species`) '
            . 'VALUES (:name, :weight, :colour, :species); ';

        $values = [
            'name' => $pig->getName(),
            'weight' => $pig->getWeight(),
            'colour' => $pig->getColour(),
            'species' => $pig->getSpecies()
        ];

        $query = $this->db->getPdo()->prepare($sql);
        $query->execute($values);

        return $this->db->getPdo()->lastInsertId();
    }
}
