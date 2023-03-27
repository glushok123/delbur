<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'label'     => 'Имя',
            'name'      => 'name',
        ]);

        CRUD::addColumn([
            'name'      => 'logo',
            'label'     => 'Фото',
            'type'      => 'image',
            'prefix' => 'public/uploads/',
            'height' => 'auto',
            'width'  => '130px',
        ]);

        CRUD::addColumn([
            'label'     => 'Роль',
            'name'      => 'roleName',
        ]);

        /*CRUD::addColumn([
            'label'     => 'Рейтинг',
            'name'      => 'rating',
        ]);

        CRUD::addColumn([
            'label'     => 'Количество заказов',
            'name'      => 'count_order',
        ]);*/

        CRUD::column('email');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);

        CRUD::addField([
            'label'     => 'Имя',
            'name'      => 'name',
        ]);

        /*CRUD::addField([
            'label'     => 'Рейтинг',
            'name'      => 'rating',
        ]);

        CRUD::addField([
            'label'     => 'Количество заказов',
            'name'      => 'count_order',
        ]);*/

        CRUD::field('email');

        CRUD::addField([
            'name' => 'logo',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
        ]);

        CRUD::addField([
            'label'     => 'Роль',
            'type'      => 'select',
            'name'      => 'role',
            'entity'    => 'user_role',
            'attribute' => 'name',
            'model'     => "App\Models\Role",
        ]);

        CRUD::field('password');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
