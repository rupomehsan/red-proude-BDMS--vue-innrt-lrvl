<?php

namespace App\Modules\BloodManagement\PostForBlood;

use App\Modules\BloodManagement\PostForBlood\Actions\All;
use App\Modules\BloodManagement\PostForBlood\Actions\Destroy;
use App\Modules\BloodManagement\PostForBlood\Actions\Show;
use App\Modules\BloodManagement\PostForBlood\Actions\Store;
use App\Modules\BloodManagement\PostForBlood\Actions\Update;
use App\Modules\BloodManagement\PostForBlood\Actions\SoftDelete;
use App\Modules\BloodManagement\PostForBlood\Actions\Restore;
use App\Modules\BloodManagement\PostForBlood\Actions\Import;
use App\Modules\BloodManagement\PostForBlood\Validations\BulkActionsValidation;
use App\Modules\BloodManagement\PostForBlood\Validations\GetAllValidation;
use App\Modules\BloodManagement\PostForBlood\Validations\Validation;
use App\Modules\BloodManagement\PostForBlood\Actions\BulkActions;
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