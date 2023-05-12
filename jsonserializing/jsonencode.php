<?php
//array example
$names = [
    ['name' => 'Cuthbert'],
    ['name' => 'Herbert'],
    ['name' => 'Gerbert']
];
echo json_encode($names);
// Outputs [{"name":"Cuthbert"},{"name":"Herbert"},{"name":"Gerbert"}]

//object example
class Duck implements JsonSerializable {
    private $name = 'Quack Efron';
    protected $age = 55;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->getName(),
            'age' => $this->getAge()
        ];
    }
}

class Duckling extends Duck {
    private $favColour = 'yellow';

    /**
     * @return string
     */
    public function getFavColour(): string
    {
        return $this->favColour;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->getName(),
            'age' => $this->getAge(),
            'favColour' => $this->getFavColour()
        ];
    }
}

$duck = new Duck();
echo json_encode($duck);
// Outputs {"name":"Quack Efron","age":55}

$duckling = new Duckling();
echo json_encode($duckling);
// Outputs {"name":"Quack Efron","age":55,"favColour":"yellow"}
