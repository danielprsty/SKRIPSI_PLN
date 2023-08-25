<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class teamleader extends Sximo  {
	
	protected $table = 'tb_team_leader';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_team_leader.* FROM tb_team_leader  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_team_leader.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
