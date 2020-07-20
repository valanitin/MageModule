<?php

namespace Nitin\Virtualpro\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $_productLoader;

    /**
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Catalog\Model\ProductFactory $productLoader
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Catalog\Model\ProductFactory $productLoader
    ) {
        parent::__construct($context);
        $this->_productLoader = $productLoader;
    }
    
    public function getProduct($id)
    {
        return $this->_productLoader->create()->load($id);
    }
}
