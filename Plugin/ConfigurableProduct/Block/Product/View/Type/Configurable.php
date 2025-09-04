<?php
/**
 * @author Movatech Team
 * @copyright Copyright (c) 2019 Movatech
 * @package Movatech_DynamicSku
 */

namespace Movatech\DynamicSku\Plugin\ConfigurableProduct\Block\Product\View\Type;

class Configurable
{
    public function afterGetJsonConfig(
        \Magento\ConfigurableProduct\Block\Product\View\Type\Configurable $subject,
        $result
    ) {
        $jsonResult = json_decode($result, true);
        $jsonResult['skus'] = [];
        foreach ($subject->getAllowProducts() as $simpleProduct) {
            $jsonResult['skus'][$simpleProduct->getId()] = $simpleProduct->getSku();
        }
        $result = json_encode($jsonResult);
        return $result;
    }
}
