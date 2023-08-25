@extends('layouts.app')


@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="page-header">
    <h2> Sample Dashboard <small> Just change any content here with real data </small> </h2>
</div>
<div class="p-5">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class=" info-box">
                <div class="icon bg-orange">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <h4> {{$total_admin}} </h4>
                    Admin

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class=" info-box">
                <div class="icon bg-green">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <h4> {{$total_supervisor}}</h4>
                    Supervisor

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class=" info-box">
                <div class="icon bg-yellow">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <h4> {{$total_team_leader}} </h4>
                    Team Leader

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class=" info-box">
                <div class="icon bg-cyan">
                    <i class="fa fa-plane"></i>
                </div>
                <div class="content">
                    <h4> {{$total_daily_report}} </h4>
                   Hasil Daily Report

                </div>
            </div>
        </div>


    </div>




</div>
</div>




<style type="text/css">
    .info-box {


        background: #fff;
        box-shadow: 1px 0px 3px rgba(0, 0, 0, 0.1);
        border-radius: 5px !important;
    }

    .info-box .icon {
        padding: 20px;
        display: inline-block;
        text-align: center;
        background: #42b549;
        border-radius: 5px !important;
        box-shadow: 1px 0px 3px rgba(0, 0, 0, 0.1);
        position: absolute;
        margin-top: -20px;
        margin-left: 20px;
    }

    .info-box .icon i {
        font-size: 30px;

        color: #fff;
    }

    .info-box .content {

        padding: 15px 10px 0 10px;
        font-size: 12px;
        text-align: right;
    }

    .info-box .content .info {
        padding: 10px;
        border-top: solid 1px #ddd;
        margin-top: 10px;
        text-align: left;
        font-size: 11px;
        color: #999;
    }

    .info-box .content h4 {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .bg-orange {
        background: #ff9900 !important;
        color: #fff;
    }

    .bg-cyan {
        background: #00BCD4 !important;
        color: #fff;
    }

    .bg-green {
        background: #8BC34A !important;
        color: #fff;
    }

    .bg-red {
        background: #E91E63 !important;
        color: #fff;
    }

</style>


@stop
