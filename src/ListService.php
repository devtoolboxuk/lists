<?php

namespace devtoolboxuk\lists;

class ListService
{
    private $listArray = [];

    public function findInArray($type, $keyword='')
    {
        $this->listArray = $this->getArray($type);
    }

    /**
     * @param string $type
     * @return false|string
     */
    public function getJson($type = '')
    {
        return json_encode($this->getArray($type));
    }

    /**
     * @param string $type
     * @return array|void
     */
    public function getArray($type = '')
    {
        switch (strtolower($type)) {
            case 'badbot':
                return $this->readResource('BadBots');
                break;
        }
        return [];
    }

    private function readResource($file = '')
    {
        //Read in file to an array
    }

    private function hasOption($name)
    {
        return isset($this->listArray[$name]);
    }
}