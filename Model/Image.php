<?php

namespace Lof\ImageClean\Model;

class Image extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Lof\ImageClean\Model\ResourceModel\Image');
    }
}
