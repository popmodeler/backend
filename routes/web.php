<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['middleware' => 'cors'], function ($router) {
    $router->group(['prefix' => 'api'], function ($router) {
        $router->post('signup', 'AuthController@register');
        $router->post('signin', 'AuthController@login');
        $router->post('logout', 'AuthController@logout');
        $router->post('send_email', "MailController@sendEmail");
        $router->post('resetPassword', "ChangePasswordController@passwordResetProcess");


        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('category', 'CategoryController@showAllCategory');
            $router->get('category/{id}', 'CategoryController@showOneCategory');

            $router->post('category', 'CategoryController@create');


            $router->get('alliance_member/{cnpj}', 'AllianceMemberController@showOne');
            $router->get('alliance_member', 'AllianceMemberController@showAll');
            $router->put('teste', 'AllianceMemberController@getAll');

            $router->post('alliance_member', 'AllianceMemberController@create');
            $router->delete('alliance_member/{id}', 'AllianceMemberController@delete');
            $router->put('alliance_member/{id}', 'AllianceMemberController@update');




            $router->get('business_alliance/{id}', 'BusinessAllianceController@showOne');
            $router->get('business_alliance/{id}', 'BusinessAllianceController@showAll');
            $router->get('business_alliance_permission/{id}', 'BusinessAllianceController@showAllWithPermission');

            $router->get('business_alliance_public', 'BusinessAllianceController@showPublics');
            $router->get('business_alliance_own/{id}', 'BusinessAllianceController@showOwn');



            $router->post('business_alliance', 'BusinessAllianceController@create');
            $router->delete('business_alliance/{id}', 'BusinessAllianceController@delete');
            $router->put('business_alliance/{id}', 'BusinessAllianceController@update');


            $router->get('internal_collaboration/{id}', 'InternalCollaborationController@showOne');
            $router->get('internal_collaboration', 'InternalCollaborationController@showAll');

            $router->post('internal_collaboration', 'InternalCollaborationController@create');
            $router->put('internal_collaboration/{id}', 'InternalCollaborationController@update');



            $router->get('external_collaboration/{id}', 'ExternalCollaborationController@showOne');
            $router->get('external_collaboration', 'ExternalCollaborationController@showAll');

            $router->post('external_collaboration', 'ExternalCollaborationController@create');
            $router->put('external_collaboration/{id}', 'ExternalCollaborationController@update');


            $router->post('store', 'UploadController@store');



            // $router->get('pop/{filename}', 'PopsController@showOne');
            $router->get('pop', 'PopsController@showAll');
            $router->post('pop', 'PopsController@create');
            $router->put('pop/{id}', 'PopsController@update');
            $router->get('pop/{id}', 'PopsController@showOne');
            $router->get('pop/overall_view/{id}', 'PopsController@showOverallView');


            $router->delete('pop/{id}', 'PopsController@delete');


            $router->post('popmission', 'PopMissionsController@create');
            $router->put('popmission/{id}', 'PopMissionsController@update');
            $router->delete('popmission/{id}', 'PopMissionsController@delete');

            $router->post('mission_process', 'MissionProcessController@create');



            $router->put('overall_view/{id}', 'OverallViewController@update');
            $router->post('overall_view', 'OverallViewController@create');

            $router->put('popMissionModel/{id}', 'PopMissionModelController@update');
            $router->post('popMissionModel', 'PopMissionModelController@create');

            $router->put('popMissionDetailedModel/{id}', 'PopMissionDetailedModelController@update');
            $router->post('popMissionDetailedModel', 'PopMissionDetailedModelController@create');



            $router->get('constituent_process/{id}', 'ConstituentProcessController@showOne');
            $router->get('constituent_process', 'ConstituentProcessController@showAll');
            $router->post('constituent_process', 'ConstituentProcessController@create');
            $router->put('constituent_process/{id}', 'ConstituentProcessController@update');
            $router->delete('constituent_process/{id}', 'ConstituentProcessController@delete');

            $router->get('users', 'AuthController@getUsers');

            $router->get('permissions/{id}', 'PermissionController@showAll');
            $router->post('permission', 'PermissionController@create');
        });
    });

    $router->get('{any:.*}', function () {
        return view('index');
    });

    $router->options('{any:.*}', function () {
        return response('', 200);
    });
});
