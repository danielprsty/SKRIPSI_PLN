<?php
        
// Start Routes for adminaplikasi 
Route::resource('services/adminaplikasi','Services\AdminaplikasiController');
// End Routes for adminaplikasi 

                    
// Start Routes for supervisor 
Route::resource('services/supervisor','Services\SupervisorController');
// End Routes for supervisor 

                    
// Start Routes for teamleader 
Route::resource('services/teamleader','Services\TeamleaderController');
// End Routes for teamleader 

                    
// Start Routes for cabangdivisi 
Route::resource('services/cabangdivisi','Services\CabangdivisiController');
// End Routes for cabangdivisi 

                    
// Start Routes for dailyreport 
Route::resource('services/dailyreport','Services\DailyreportController');
// End Routes for dailyreport 

                    
// Start Routes for Laporan 
Route::resource('services/Laporan','Services\LaporanController');
// End Routes for Laporan 

                    ?>