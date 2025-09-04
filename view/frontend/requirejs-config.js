/**
 * @author Movatech Team
 * @copyright Copyright (c) 2019 Movatech
 * @package Movatech_DynamicSku
 */

var config = {
    config: {
        mixins: {
            'Magento_ConfigurableProduct/js/configurable': {
                'Movatech_DynamicSku/js/model/skuswitch': true
            },
            'Magento_Swatches/js/swatch-renderer': {
                'Movatech_DynamicSku/js/model/swatch-skuswitch': true
            }
        }
    }
};
