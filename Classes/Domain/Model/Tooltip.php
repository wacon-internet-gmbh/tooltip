<?php

declare(strict_types=1);

namespace WACON\Tooltip\Domain\Model;


/**
 * This file is part of the "Tooltip" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Kerstin Schmitt <info@wacon.de>, WACON Internet GmbH
 */

/**
 * Tooltip
 */
class Tooltip extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

     /**
     * tipid
     *
     * @var string
     */
    protected $tipid = '';

     /**
     * tiptext
     *
     * @var string
     */
    protected $tiptext = '';

    /**
     * Returns the tiptext
     *
     * @return string
     */
    public function getTiptext()
    {
        return $this->tiptext;
    }

    /**
     * Sets the tiptext
     *
     * @param string $tiptext
     * @return void
     */
    public function setTiptext(string $tiptext)
    {
        $this->tiptext = $tiptext;
    }

    /**
     * Returns the tipid
     *
     * @return string
     */
    public function getTipid()
    {
        return $this->tipid;
    }

    /**
     * Sets the tipid
     *
     * @param string $tipid
     * @return void
     */
    public function setTipid(string $tipid)
    {
        $this->tipid = $tipid;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
