<?php

namespace James2001\Bundle\OdtBundle;

/**
 * @package James2001\OdtBundle
 */
class Factory
{
    /**
     * @param null $filename
     * @param array $config
     * @return \Odf
     */
    public function createOdtObject($filename, $config = array())
    {
        return new \Odf($filename,$config);
    }

    /**
     * @param $name
     * @param $xml
     * @param $odf
     * @return \Segment
     */
    public function createSegment($name, $xml, $odf)
    {
        return new \Segment($name,$xml,$odf);
    }
}
