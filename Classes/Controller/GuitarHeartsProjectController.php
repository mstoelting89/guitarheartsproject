<?php
declare(strict_types=1);

namespace Mst\Ghp\Controller;


/***
 *
 * This file is part of the "Guitarheartsproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 
 *
 ***/
/**
 * GuitarHeartsProjectController
 */
class GuitarHeartsProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * guitarHeartsProjectRepository
     * 
     * @var \Mst\Ghp\Domain\Repository\GuitarHeartsProjectRepository
     */
    protected $guitarHeartsProjectRepository = null;

    /**
     * @param \Mst\Ghp\Domain\Repository\GuitarHeartsProjectRepository $guitarHeartsProjectRepository
     */
    public function injectGuitarHeartsProjectRepository(\Mst\Ghp\Domain\Repository\GuitarHeartsProjectRepository $guitarHeartsProjectRepository)
    {
        $this->guitarHeartsProjectRepository = $guitarHeartsProjectRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $guitarHeartsProjects = $this->guitarHeartsProjectRepository->findAll();
        $this->view->assign('guitarHeartsProjects', $guitarHeartsProjects);
    }

    /**
     * action show
     * 
     * @param \Mst\Ghp\Domain\Model\GuitarHeartsProject $guitarHeartsProject
     * @return void
     */
    public function showAction(\Mst\Ghp\Domain\Model\GuitarHeartsProject $guitarHeartsProject)
    {
        $this->view->assign('guitarHeartsProject', $guitarHeartsProject);
    }
}
