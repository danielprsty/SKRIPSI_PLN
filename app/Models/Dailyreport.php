<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dailyreport extends Sximo  {
	
	protected $table = 'tb_daily_report';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_daily_report.*,tb_users.first_name as leader  FROM tb_daily_report left join tb_users on tb_daily_report.id_team_leader = tb_users.id ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_daily_report.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
