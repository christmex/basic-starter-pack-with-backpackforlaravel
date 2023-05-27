<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \Backpack\PermissionManager\app\Http\Controllers\RoleCrudController as BackpackRoleCrudController;

class RoleCrudController extends BackpackRoleCrudController
{
    // this is like your another EntityCrudController function, just overwrite it here, if you want to overwrite something.
    public function setupListOperation(){
        CRUD::column('name');
    }
}