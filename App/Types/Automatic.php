<?php
namespace App\Types;

class Automatic implements TypeInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return 'Automatic';
    }
}
