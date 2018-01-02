<?php


namespace Aber\Test\Model;

use Aber\Test\Api\AberManagementInterface;

class AberManagement implements AberManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getAber($param)
    {
        $res[] = 'WHO!!! this is awsom!!! $param 1' . $param;
        $res[] = 'WHO!!! this is awsom!!! $param 2' . $param;
        $res[] = 'WHO!!! this is awsom!!! $param 3' . $param;
        $res[] = 'WHO!!! this is awsom!!! $param 4' . $param;
        return $res;
    }
}
