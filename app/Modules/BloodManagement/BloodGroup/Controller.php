<?php

namespace App\Modules\BloodManagement\BloodGroup;

use App\Modules\BloodManagement\BloodGroup\Actions\All;
use App\Modules\BloodManagement\BloodGroup\Actions\Destroy;
use App\Modules\BloodManagement\BloodGroup\Actions\Show;
use App\Modules\BloodManagement\BloodGroup\Actions\Store;
use App\Modules\BloodManagement\BloodGroup\Actions\Update;
use App\Modules\BloodManagement\BloodGroup\Actions\SoftDelete;
use App\Modules\BloodManagement\BloodGroup\Actions\Restore;
use App\Modules\BloodManagement\BloodGroup\Actions\Import;
use App\Modules\BloodManagement\BloodGroup\Validations\BulkActionsValidation;
use App\Modules\BloodManagement\BloodGroup\Validations\GetAllValidation;
use App\Modules\BloodManagement\BloodGroup\Validations\Validation;
use App\Modules\BloodManagement\BloodGroup\Actions\BulkActions;
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