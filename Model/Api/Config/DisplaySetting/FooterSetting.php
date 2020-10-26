<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Mageplaza
 * @package   Mageplaza_BetterMaintenance
 * @copyright Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license   https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\BetterMaintenance\Model\Api\Config\DisplaySetting;

use Magento\Framework\DataObject;
use Mageplaza\BetterMaintenance\Api\Data\Config\DisplaySetting\FooterInterface;

/**
 * Class ComingSoonSetting
 * @package Mageplaza\BetterMaintenance\Model\Api\Config
 */
class FooterSetting extends DataObject implements FooterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCmsBlock()
    {
        return $this->getData(self::CMS_BLOCK);
    }

    /**
     * {@inheritdoc}
     */
    public function setCmsBlock($value)
    {
        return $this->setData(self::CMS_BLOCK, $value);
    }
}
