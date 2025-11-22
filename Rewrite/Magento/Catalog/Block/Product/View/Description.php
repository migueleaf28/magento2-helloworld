<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Vendor\HelloWorld\Rewrite\Magento\Catalog\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description
{
    public function toHtml()
    {
        $originalHtml = parent::toHtml();
        if ($this->getNameInLayout() === 'product.info.description') {
            $customText = __('Descripción modificada por Vendor_HelloWorld');
            return $originalHtml . '<div class="vendor-helloworld-custom">' .
                $this->escapeHtml($customText) .
                '</div>';
        }
        return $originalHtml;
    }
}

