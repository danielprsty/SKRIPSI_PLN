<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use DB;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();
		
        $this->data = array(
            'pageTitle' =>  $this->config['cnf_appname'],
            'pageNote'  =>  'Welcome to Dashboard',
            
        );			
	}

	public function index( Request $request )
	{
		
		
		$total_admin = DB::table('tb_admin')
						->select(DB::Raw('count(id) as total'))
						->pluck('total')
						->first();
		$total_supervisor = DB::table('tb_supervisor')
			->select(DB::Raw('count(id) as total'))
			->pluck('total')
			->first();
		$total_team_leader = DB::table('tb_team_leader')
		->select(DB::Raw('count(id) as total'))
		->pluck('total')
		->first();

		$total_daily_report = DB::table('tb_daily_report')
		->select(DB::Raw('count(id) as total'))
		->pluck('total')
		->first();

		$this->data = array_merge(array(
			'total_admin'=>$total_admin,
			'total_supervisor'=>$total_supervisor,
			'total_team_leader'=>$total_team_leader,
			'total_daily_report'=>$total_daily_report
		),$this->data);
		
		
		return view('dashboard.index',$this->data);
	}	


	


}