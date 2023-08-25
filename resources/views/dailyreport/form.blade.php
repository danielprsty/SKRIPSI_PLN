@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

{!! Form::open(array('url'=>'dailyreport?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' =>
true ,'id'=> 'FormTable' )) !!}
<div class="toolbar-nav">
    <div class="row">

        <div class="col-md-6 ">
            <div class="submitted-button">
                <button name="apply" class="tips btn btn-sm   " title="{{ __('core.btn_back') }}"><i
                        class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
                <button name="save" class="tips btn btn-sm " id="saved-button" title="{{ __('core.btn_back') }}"><i
                        class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
            </div>
        </div>
        <div class="col-md-6 text-right ">
            <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "
                title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>
        </div>
    </div>
</div>


<div class="p-5">
    <ul class="parsley-error-list">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend> Daily Report</legend>
                {!! Form::hidden('id', $row['id']) !!}
                <input type="hidden" name="id_team_leader" id="id_team_leader" value="{{Session::get('uid');}}">
                <div class="form-group row  ">
                    <label for="Tanggal Pekerjaan" class=" control-label col-md-4 text-left"> Tanggal Pekerjaan <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="input-group input-group-sm m-b" style="width:150px !important;">
                            {!! Form::text('tanggal_pekerjaan', $row['tanggal_pekerjaan'],array('class'=>'form-control
                            form-control-sm date')) !!}
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Waktu Kerja" class=" control-label col-md-4 text-left"> Waktu Kerja <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">
                        <input type='text' name='waktu_kerja' id='waktu_kerja' value='{{ $row['waktu_kerja'] }}'
                            required class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Foto Before" class=" control-label col-md-4 text-left"> Deskripsi Pekerjaan <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <input type='text' name='deskripsi_pekerjaan' id='deskripsi_pekerjaan'
                            value='{{ $row['deskripsi_pekerjaan'] }}' required class='form-control form-control-sm ' />

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <?php if(isset($row['id'])){;?>
                <div class="form-group row  ">
                    <label for="Foto Before" class=" control-label col-md-4 text-left"> Foto Before <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_before" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_before-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_before"],"pekerjaan") !!}
                            <img src="{{asset('.pekerjaan/'.$row['foto_before'])}}" class="img-fluid" alt="">
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Foto Progress" class=" control-label col-md-4 text-left"> Foto Progress <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_progress" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_progress-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_progress"],"pekerjaan") !!}
                            <img src="{{asset('.pekerjaan/'.$row['foto_progress'])}}" class="img-fluid" alt="">
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Foto After" class=" control-label col-md-4 text-left"> Foto After <span class="asterix">
                            * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_after" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_after-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_after"],"pekerjaan") !!}
                            <img src="{{asset('.pekerjaan/'.$row['foto_after'])}}" class="img-fluid" alt="">
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <?php }else{;?>

                <div class="form-group row  ">
                    <label for="Foto Before" class=" control-label col-md-4 text-left"> Foto Before <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_before" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_before-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_before"],"pekerjaan") !!}
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Foto Progress" class=" control-label col-md-4 text-left"> Foto Progress <span
                            class="asterix"> * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_progress" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_progress-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_progress"],"pekerjaan") !!}
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Foto After" class=" control-label col-md-4 text-left"> Foto After <span class="asterix">
                            * </span></label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="foto_after" class="upload"
                                accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="foto_after-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["foto_after"],"pekerjaan") !!}
                        </div>

                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <?php }?>
            </fieldset>
        </div>

    </div>

    <input type="hidden" name="action_task" value="save" />

</div>
</div>
{!! Form::close() !!}

<script type="text/javascript">
    $(document).ready(function () {





        $('.removeMultiFiles').on('click', function () {
            var removeUrl = '{{ url("dailyreport/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function (response) {});
            $(this).parent('div').empty();
            return false;
        });

    });

</script>
@stop
