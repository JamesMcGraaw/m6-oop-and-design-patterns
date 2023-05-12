<?php
//array example

header('Content-Type: application/json; charset=utf-8');
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
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

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
$duck->setName('Ian');
echo json_encode($duck);
// Outputs {"name":"Quack Efron","age":55}

$duckling = new Duckling();
$duckling->setName('Tray');
echo json_encode($duckling);
// Outputs {"name":"Quack Efron","age":55,"favColour":"yellow"}
