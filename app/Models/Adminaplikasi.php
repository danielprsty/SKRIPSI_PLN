<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class adminaplikasi extends Sximo  {
	
	protected $table = 'tb_admin';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_admin.* FROM tb_admin  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_admin.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
