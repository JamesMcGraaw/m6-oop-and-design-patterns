<?php

class PigHydrator

{
    public static function populateFromArray(array $pigArray, Pig1 $pig): void {
        $pig->name = $pigArray[0];
        $pig->weight = $pigArray[1];
        $pig->colour = $pigArray[2];
        $pig->species = $pigArray[3];
    }

    public static function popuateFromDB(PDO $db, int $id): Pig1 {
        $query = $db->prepare(
            'SELECT `name`, `weight`, `colour`, `species`'
            . 'FROM `pigs`'
            . 'WHERE `id` = ?;');
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Pig1::class);
        return $query->fetch();
    }
}
