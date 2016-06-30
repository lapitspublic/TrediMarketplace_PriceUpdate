<?php   
    class TrediMarketplace_PriceUpdate_Model_Observer{
        public function priceUpdate(Varien_Event_Observer $observer){
            // Get the quote item
                $item = $observer->getQuoteItem();
            // Ensure we have the parent item, if it has one
                $item = ( $item->getParentItem() ? $item->getParentItem() : $item );
            // Load the custom price
                $price = "300.00";
            // Set the custom price
                $item->setCustomPrice($price);
                $item->setOriginalCustomPrice($price);
            // Enable super mode on the product.
                $item->getProduct()->setIsSuperMode(true);
        }
    }
?>
