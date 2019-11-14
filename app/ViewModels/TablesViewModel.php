<?php
namespace App\ViewModels;

use DB;

class TablesViewModel{
    public $tables = [];
    
    public function create($tableName){
        $fields = DB::select(DB::raw("DESCRIBE $tableName"));
        $tables = new TablesViewModel();

        $collection = collect($tables);

        $this->tables = $fields;
        return $this;
    }
}

class TablesModelBuilder{
    public function __construct(){

    }

    
}