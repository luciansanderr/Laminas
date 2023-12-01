<?php

declare(strict_types=1);

namespace Album\Controller;

use Laminas\ApiTools\Admin\Module as AdminModule;
use Laminas\Http\Response;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

use function class_exists;

class AlbumController extends AbstractActionController
{
    /**
     * @return Response|ViewModel
     */
    public function indexAction()
    {
        return new ViewModel();
    }
    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}
