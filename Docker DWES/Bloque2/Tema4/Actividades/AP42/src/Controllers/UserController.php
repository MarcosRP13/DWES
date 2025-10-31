<?php

namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\users;
use AP42\Views\UserView;

class UserController
{
    public function userlist(): void
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $users = $entityManager->getRepository(users::class)->findAll();
        $views = new UserView();
        $views->render($users);
    }
}