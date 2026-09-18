<?php

declare(strict_types=1);

namespace WACON\Tooltip\Domain\Repository;


/**
 * This file is part of the "Tooltip" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Kerstin Schmitt <info@wacon.de>, WACON Internet GmbH
 */

/**
 * The repository for Tooltip
 */
class TooltipRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * Returns all tooltips that have both a keyword (tipid) and a
     * description set. Records with an empty tipid or description are
     * excluded, since they cannot be used to replace text or to be
     * displayed in the glossary.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAll(): \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
    {
        $query = $this->createQuery();
        $query->matching($this->createValidRecordsConstraint($query));
        return $query->execute();
    }

    /**
     * Returns all tooltips ordered alphabetically by their keyword (tipid),
     * for use as a glossary listing. Records with an empty tipid or
     * description are excluded, see findAll().
     *
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAllOrderedByTipid()
    {
        $query = $this->createQuery();
        $query->matching($this->createValidRecordsConstraint($query));
        $query->setOrderings([
            'tipid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
        ]);
        return $query->execute();
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Qom\ConstraintInterface
     */
    protected function createValidRecordsConstraint(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
    {
        return $query->logicalAnd(
            $query->logicalNot($query->equals('tipid', '')),
            $query->logicalNot($query->equals('description', ''))
        );
    }
}
