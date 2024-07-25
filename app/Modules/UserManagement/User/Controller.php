<?php

namespace App\Modules\UserManagement\User;

use App\Modules\UserManagement\User\Actions\All;
use App\Modules\UserManagement\User\Actions\Destroy;
use App\Modules\UserManagement\User\Actions\Show;
use App\Modules\UserManagement\User\Actions\Store;
use App\Modules\UserManagement\User\Actions\Update;
use App\Modules\UserManagement\User\Actions\SoftDelete;
use App\Modules\UserManagement\User\Actions\Restore;
use App\Modules\UserManagement\User\Actions\Import;
use App\Modules\UserManagement\User\Validations\BulkActionsValidation;
use App\Modules\UserManagement\User\Validations\GetAllValidation;
use App\Modules\UserManagement\User\Validations\Validation;
use App\Modules\UserManagement\User\Actions\BulkActions;
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

    public function show($id)
    {
        $data = Show::execute($id);
        return $data;
    }

    public function update(Validation $request, $id)
    {
        $data = Update::execute($request, $id);
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
