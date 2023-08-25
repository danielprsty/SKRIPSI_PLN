<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class supervisor extends Sximo  {
	
	protected $table = 'tb_supervisor';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_supervisor.* FROM tb_supervisor  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_supervisor.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
