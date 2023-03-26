<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Imail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/imail');
        CRUD::setEntityNameStrings('بريد', 'بريد المديرية');
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
                'name'  => 'mail_number',
                'label' => 'رقم الرسالة',
                'type'  => 'text',
                'limit'  => 20
            ]
        );

        CRUD::addColumn(
            [
                'name'  => 'mail_subject',
                'label' => 'موضوع الرسالة',
                'type'  => 'text',
                'limit'  => 20
            ]
        );

        CRUD::addColumn(
            [
                'name'  => 'mail_date',
                'label' => 'تاريخ الارسال',
                'limit'  => 20
            ]
        );


        CRUD::addColumn(
            [
                'name'  => 'mail_receiver',
                'label' => 'المرسل',
                'type'  => 'text',
                'limit'  => 20
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
        CRUD::setValidation(ImailRequest::class);

        CRUD::addField([
                'name' => 'mail_number',
                'label' => 'رقم الرسالة',
            ]
        );

        CRUD::addField([
                'name' => 'mail_subject',
                'label' => 'موضوع الرسالة',
            ]
        );

        CRUD::addField([
                'name' => 'mail_date',
                'label' => 'تاريخ الرسالة',
                'attributes' => [
                    'class'       => 'form-control text-right',
                ],
            ]
        );

        CRUD::addField([
                'name' => 'mail_receiver',
                'label' => 'المستقبل',
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
                'name'  => 'mail_number',
                'label' => 'رقم الرسالة',
                'type'  => 'text',
            ]
        );

        CRUD::addColumn(
            [
                'name'  => 'mail_subject',
                'label' => 'موضوع الرسالة',
                'type'  => 'text',
            ]
        );

        CRUD::addColumn(
            [
                'name'  => 'mail_date',
                'label' => 'تاريخ الارسال',
                'type'  => 'text',
            ]
        );

        CRUD::addColumn(
            [
                'name'  => 'mail_receiver',
                'label' => 'المستقبل',
                'type'  => 'text',
            ]
        );
    }
}
