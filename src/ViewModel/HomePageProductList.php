<?php

namespace Hyva\Productslider\ViewModel;

use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Model\Product\Visibility as ProductVisibility;
use Hyva\Theme\ViewModel\Store;

class HomePageProductList implements ArgumentInterface
{
    /**
     * @var ProductCollectionFactory
     */
    private $productCollectionFactory;

    /**
     *  @var Store  
     */
    private $storeViewModel;

    public function __construct(
        ProductCollectionFactory $productCollectionFactory,
        Store $storeViewModel
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->storeViewModel = $storeViewModel;
    }

    public function createSliderProductCollection($skuList): ProductCollection
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addFieldToSelect('*');
        $collection->addAttributeToFilter('sku', ['in' => $skuList]);
        $collection->addAttributeToFilter('website_id', $this->storeViewModel->getWebsiteId());
        $collection->addAttributeToFilter('visibility', [
            ProductVisibility::VISIBILITY_IN_CATALOG,
            ProductVisibility::VISIBILITY_BOTH,
        ], 'in');

        $collection->getSelect()->order("FIELD(sku, '" . implode("','", $skuList) . "')");

        return $collection;
    }
}
