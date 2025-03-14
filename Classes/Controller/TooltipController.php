<?php

declare(strict_types=1);

namespace WACON\Tooltip\Controller;


/**
 * This file is part of the "Tooltip" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Kerstin Schmitt <info@wacon.de>, WACON Internet GmbH
 */

/**
 * TooltipController
 */
class TooltipController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * tooltipRepository
     *
     * @var \WACON\Tooltip\Domain\Repository\TooltipRepository
     */
    protected $tooltipRepository = null;

    /**
     * @param \WACON\Tooltip\Domain\Repository\TooltipRepository $tooltipRepository
     */
    public function injectTooltipRepository(\WACON\Tooltip\Domain\Repository\TooltipRepository $tooltipRepository)
    {
        $this->tooltipRepository = $tooltipRepository;
    }

    

    /**
     * action replace
     *
     * 
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function replaceAction(): \Psr\Http\Message\ResponseInterface
    {
        $tooltips = $this->tooltipRepository->findAll();
        $this->view->assign('tooltips', $tooltips);
        return $this->htmlResponse();
    }

}
