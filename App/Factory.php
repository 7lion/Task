<?php
namespace App;

use App\Types\TypeInterface;

class Factory extends AbstractFactory
{
    /**
     * @var array of strings
     */
    private $allowTypes = [];

    /**
     * @param TypeInterface $type
     */
    public function addAllowType(TypeInterface $type)
    {
        $this->allowTypes[] = $type->getType();
    }

    /**
     * @param TypeInterface $type
     * @param int $count - count of created elements; Default = 1
     * @throws \InvalidArgumentException
     * @return array of TypeInterface
     */
    public function createRobots(TypeInterface $type, $count = 1)
    {
        if (!in_array($type->getType(), $this->allowTypes)) {
            throw new \InvalidArgumentException(
                sprintf('Creation robots with type %s is forbidden.', $type->getType())
            );
        }
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
            $robots[] = $this->createByType($type->getType());
        }
        return $robots;
    }

    /**
     * @param string $type
     * @return Types\TypeInterface
     */
    protected function createByType($type)
    {
        switch ($type) {
            case 'Automatic':
                return new Types\Automatic();
            case 'SemiAutomatic':
                return new Types\SemiAutomatic();
            default:
                throw new \InvalidArgumentException(
                    sprintf('Invalid type %s', $type)
                );
        }
    }
}
