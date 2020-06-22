<?php

use Eav\Attribute;
use Eav\EntityAttribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductEntityAttributes161645 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        			
			Attribute::add([
				'attribute_code' => 'sku',
				'entity_code' => 'product',
				'backend_class' => '',
				'backend_type' => 'string',
				'backend_table' =>  '',
				'frontend_class' =>  '',
				'frontend_type' => 'text',
				'frontend_label' => 'Sku',
				'source_class' =>  '',
				'default_value' => '',
				'is_required' => 0,
				'is_filterable' => 0,
				'is_searchable' => 0,
				'required_validate_class' =>  ''	
			]);
			
			Attribute::add([
				'attribute_code' => 'name',
				'entity_code' => 'product',
				'backend_class' => '',
				'backend_type' => 'string',
				'backend_table' =>  '',
				'frontend_class' =>  '',
				'frontend_type' => 'text',
				'frontend_label' => 'Name',
				'source_class' =>  '',
				'default_value' => '',
				'is_required' => 0,
				'is_filterable' => 0,
				'is_searchable' => 0,
				'required_validate_class' =>  ''	
			]);
			
			Attribute::add([
				'attribute_code' => 'search',
				'entity_code' => 'product',
				'backend_class' => '',
				'backend_type' => 'boolean',
				'backend_table' =>  '',
				'frontend_class' =>  '',
				'frontend_type' => 'text',
				'frontend_label' => 'Search',
				'source_class' =>  '',
				'default_value' => '',
				'is_required' => 0,
				'is_filterable' => 0,
				'is_searchable' => 0,
				'required_validate_class' =>  ''	
			]);
			
			Attribute::add([
				'attribute_code' => 'description',
				'entity_code' => 'product',
				'backend_class' => '',
				'backend_type' => 'text',
				'backend_table' =>  '',
				'frontend_class' =>  '',
				'frontend_type' => 'text',
				'frontend_label' => 'Description',
				'source_class' =>  '',
				'default_value' => '',
				'is_required' => 0,
				'is_filterable' => 0,
				'is_searchable' => 0,
				'required_validate_class' =>  ''	
			]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        			
			Attribute::remove([
				'attribute_code' => 'sku',
				'entity_code' => 'product',
			]);
			
			Attribute::remove([
				'attribute_code' => 'name',
				'entity_code' => 'product',
			]);
			
			Attribute::remove([
				'attribute_code' => 'search',
				'entity_code' => 'product',
			]);
			
			Attribute::remove([
				'attribute_code' => 'description',
				'entity_code' => 'product',
			]);

    }
}
