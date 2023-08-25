<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class cabangdivisi extends Sximo  {
	
	protected $table = 'tb_cabang_divisi';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_cabang_divisi.*,tb_team_leader.leader FROM tb_cabang_divisi left join tb_team_leader on tb_cabang_divisi.id_team_leader=tb_team_leader.id ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_cabang_divisi.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
