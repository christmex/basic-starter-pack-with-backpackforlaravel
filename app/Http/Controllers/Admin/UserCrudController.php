<?php

namespace App\Http\Controllers\Admin;

use \Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends BackpackUserCrudController
{
    // this is like your another EntityCrudController function, just overwrite it here, if you want to overwrite something.
    // public function setupListOperation(){
    //     CRUD::column('name');
    // }
}