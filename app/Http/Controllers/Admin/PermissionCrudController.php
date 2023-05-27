<?php

namespace App\Http\Controllers\Admin;

use \Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController as BackpackPermissionCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class PermissionCrudController extends BackpackPermissionCrudController
{
    // this is like your another EntityCrudController function, just overwrite it here, if you want to overwrite something.
    // public function setupListOperation(){
    //     CRUD::column('name');
    // }
}