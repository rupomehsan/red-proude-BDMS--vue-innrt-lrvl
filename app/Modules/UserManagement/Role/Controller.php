<?php

namespace App\Modules\UserManagement\Role;

use App\Modules\UserManagement\Role\Actions\All;
use App\Modules\UserManagement\Role\Actions\Destroy;
use App\Modules\UserManagement\Role\Actions\Show;
use App\Modules\UserManagement\Role\Actions\Store;
use App\Modules\UserManagement\Role\Actions\Update;
use App\Modules\UserManagement\Role\Actions\SoftDelete;
use App\Modules\UserManagement\Role\Actions\Restore;
use App\Modules\UserManagement\Role\Actions\Import;
use App\Modules\UserManagement\Role\Validations\BulkActionsValidation;
use App\Modules\UserManagement\Role\Validations\GetAllValidation;
use App\Modules\UserManagement\Role\Validations\Validation;
use App\Modules\UserManagement\Role\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index(GetAllValidation $request)
    {
        $data = All::execute($request);
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($slug)
    {
        $data = Show::execute($slug);
        return $data;
    }

    public function update(Validation $request, $slug)
    {
        $data = Update::execute($request, $slug);
        return $data;
    }

    public function softDelete()
    {
        $data = SoftDelete::execute();
        return $data;
    }
    public function destroy($slug)
    {
        $data = Destroy::execute($slug);
        return $data;
    }
    public function restore()
    {
        $data = Restore::execute();
        return $data;
    }
    public function import()
    {
        $data = Import::execute();
        return $data;
    }
    public function bulkAction(BulkActionsValidation $request)
    {
        $data = BulkActions::execute($request);
        return $data;
    }

}