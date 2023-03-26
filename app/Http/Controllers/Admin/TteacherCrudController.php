<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TteacherRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TteacherCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TteacherCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Tteacher::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tteacher');
        CRUD::setEntityNameStrings('استاذ', 'الاساتذة المستخلفين');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(
            [
                'name'  => 'number',
                'label' => 'الرقم',
                'type'  => 'text',
                'limit'  => 20
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'full_name',
                'label' => 'الاسم واللقب',
                'type'  => 'text',
                'limit'  => 20
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'certificate',
                'label' => 'الشهادة',
                'type'  => 'text',
                'limit'  => 20
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'grade',
                'label' => 'الرتبة',
                'type'  => 'text',
                'limit'  => 20
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'hiring_date',
                'label' => 'تاريخ التعيين',
                'limit'  => 20
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'duration',
                'label' => 'المدة',
                'limit' => 20,
                'type' => 'text'
            ]
        );

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TteacherRequest::class);

        CRUD::addField([
                'name' => 'number',
                'label' => 'رقم',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'full_name',
                'label' => 'الاسم واللقب',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'certificate',
                'label' => 'الشهادة',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'grade',
                'label' => 'الرتبة',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'hiring_date',
                'label' => 'تاريخ التعيين',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'duration',
                'label' => 'المدة',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        CRUD::addField([
                'name' => 'remarque',
                'label' => 'ملاحظات',
            ]
        );

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
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

    protected function setupShowOperation()
    {
        CRUD::addColumn(
            [
                'name'  => 'number',
                'label' => 'الرقم',
                'type'  => 'text',
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'full_name',
                'label' => 'الاسم واللقب',
                'type'  => 'text',
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'certificate',
                'label' => 'الشهادة',
                'type'  => 'text',
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'grade',
                'label' => 'الرتبة',
                'type'  => 'text',
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'hiring_date',
                'label' => 'تاريخ التعيين',
            ]
        );
        CRUD::addColumn(
            [
                'name'  => 'duration',
                'label' => 'المدة',
                'type' => 'text'
            ]
        );
    }
}
