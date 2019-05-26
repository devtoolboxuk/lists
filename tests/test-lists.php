<?php

namespace devtoolboxuk\lists;

use PHPUnit\Framework\TestCase;

class ListsTest extends TestCase
{

    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    function testList()
    {
        $listService = new ListService();
        $this->assertTrue($listService->findInArray('badbot','Xenu'));
    }

}
