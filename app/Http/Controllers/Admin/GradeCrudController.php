<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GradeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GradeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GradeCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Grade::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/grade');
        CRUD::setEntityNameStrings('grade', 'grades');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        $this->crud->addColumn([
            'name' => 'id',
            // 'type' => '',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'student',
            'type' => 'relationship',
            'label' => 'Student',
            'attribute' => 'name',
        ]);
        
        $this->crud->addColumn([
            'name' => 'type',
            // 'type' => 'number',
            // 'label' => 'Evaluator',
        ]);
        $this->crud->addColumn([
            'name' => 'grade',
            'type' => 'number',
            // 'label' => 'Evaluator',
        ]);

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
        CRUD::setValidation(GradeRequest::class);

        // CRUD::setFromDb(); // fields

        CRUD::addField([   // relationship
            'type' => "relationship",
            'name' => 'student_id', // the method on your model that defines the relationship
         ]);
        CRUD::addField([   // relationship
            'type' => "number",
            'name' => 'grade', // the method on your model that defines the relationship
         ]);
         CRUD::addField([   // relationship
            'type' => "text",
            'name' => 'Evaluator', // the method on your model that defines the relationship
         ]);
         CRUD::addField([
            'type' => "enum",
            'name' => 'type',
         ]);

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
}
