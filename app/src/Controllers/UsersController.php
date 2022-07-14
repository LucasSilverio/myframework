<?php

namespace App\Controllers;

use App\Models\Users;
use Lucassilverio\Framework\CrudController;

class UsersController extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}