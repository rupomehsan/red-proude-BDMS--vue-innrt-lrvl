<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/Auth/Route.php");
/*
|--------------------------------------------------------------------------
| User Management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/UserManagement/User/Route.php");
/*
|--------------------------------------------------------------------------
| BlogManagement api routes
|--------------------------------------------------------------------------
*/

include_once  base_path("app/Modules/BlogManagement/BlogPost/Route.php");
include_once  base_path("app/Modules/BlogManagement/BlogCategory/Route.php");

/*
|--------------------------------------------------------------------------
| BloodManagement api routes
|--------------------------------------------------------------------------
*/

include_once  base_path("app/Modules/BloodManagement/BloodGroup/Route.php");
include_once  base_path("app/Modules/BloodManagement/PostForBlood/Route.php");

/*
|--------------------------------------------------------------------------
| LocationManagement api routes
|--------------------------------------------------------------------------
*/

include_once  base_path("app/Modules/LocationManagement/StateDivision/Route.php");
include_once  base_path("app/Modules/LocationManagement/District/Route.php");
include_once  base_path("app/Modules/LocationManagement/Station/Route.php");

/*
|--------------------------------------------------------------------------
| WebsiteSettings api routes
|--------------------------------------------------------------------------
*/

include_once  base_path("app/Modules/WebsiteSettings/Route.php");
