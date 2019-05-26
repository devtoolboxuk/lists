<?php

namespace devtoolboxuk\lists;

use devtoolboxuk\engrafo\EngrafoService;

class ListService
{
    private $listArray = [];

    /**
     * @param $type
     * @param string $keyword
     * @return bool
     */
    public function findInArray($type, $keyword = '')
    {
        $this->listArray = $this->getArray($type);
        return in_array($keyword,$this->listArray);
    }

    /**
     * @param string $type
     * @return array|void
     */
    public function getArray($type = '')
    {
        switch (strtolower($type)) {
            case 'badbot':
                $this->readResource('BadBots');
                break;
            case 'throwawaydomains':
                $this->readResource('ThrowAwayDomains');
                break;
            case 'torexitnodes':
                $this->readResource('TorExitNodes');
                break;
        }
        return $this->listArray;
    }

    private function readResource($file = '')
    {

        $fileName = sprintf('%s.txt',$file);
        $path = sprintf('%s/../Resources/',__DIR__);

        $options = [
            'adapter' => 'text',
            'fileName' => $fileName,
            'path' => $path,
        ];

        $engrafoService = new EngrafoService($options);
        $txtService = $engrafoService->getAdapter();

        $this->listArray = $txtService->readFile();
    }

    /**
     * @param string $type
     * @return int
     */
    public function countArray($type = '')
    {
        return count($this->getArray($type));
    }

    /**
     * @param string $type
     * @return false|string
     */
    public function getJson($type = '')
    {
        return json_encode($this->getArray($type));
    }
}