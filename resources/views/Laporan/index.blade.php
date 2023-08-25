@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>
<div class="toolbar-nav">
    <div class="row">
        <form action="{{url('cetak_laporan')}}" class="form-control" method="post">
            <div class="form-group row  ">
                <label for="Tanggal Pekerjaan" class=" control-label col-md-4 text-left"> Tanggal Pekerjaan <span
                        class="asterix"> * </span></label>
                <div class="col-md-6">

                    <div class="input-group input-group-sm m-b" style="width:150px !important;">

                        <input type="date" name="tanggal_pekerjaan" class="form-control">

                    </div>
                </div>
                <div class="col-md-2">
			
			<button class="btn btn-primary btn-sm ml-3 text-white " type="submit" name="submit"
                                value="export">Cetak PDF</button>

                </div>
            </div>
			


        </form>
    </div>

</div>
<div class="table-container">

    <!-- Table Grid -->

    {!! Form::open(array('url'=>'dailyreport?'.$return, 'class'=>'form-horizontal m-t' ,'id' =>'SximoTable' )) !!}

    <table class="table  table-hover " id="{{ $pageModule }}Table">
        <thead>
            <tr>
                <th style="width: 3% !important;" class="number"> No </th>



                @foreach ($tableGrid as $t)
                @if($t['view'] =='1')
                <?php $limited = isset($t['limited']) ? $t['limited'] :''; 
								if(SiteHelpers::filterColumn($limited ))
								{
									$addClass='class="tbl-sorting" ';
									if($insort ==$t['field'])
									{
										$dir_order = ($inorder =='desc' ? 'sort-desc' : 'sort-asc'); 
										$addClass='class="tbl-sorting '.$dir_order.'" ';
									}
									echo '<th align="'.$t['align'].'" '.$addClass.' width="'.$t['width'].'">'.\SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())).'</th>';				
								} 
								?>
                @endif
                @endforeach
                <th>Foto Before</th>
                <th>Foto Progress</th>
                <th>Foto After</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($rowData as $row)
            <tr>
                <td class="thead"> {{ ++$i }} </td>

                @foreach ($tableGrid as $field)
                @if($field['view'] =='1')
                <?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
                @if(SiteHelpers::filterColumn($limited ))
                <?php $addClass= ($insort ==$field['field'] ? 'class="tbl-sorting-active" ' : ''); ?>
                <td align="{{ $field['align'] }}" width=" {{ $field['width'] }}" {!! $addClass !!}>
                    {!! SiteHelpers::formatRows($row->{$field['field']},$field ,$row ) !!}
                </td>

                @endif
                @endif

                @endforeach
                <td>
                    <img src="{{asset('.pekerjaan/'.$row->foto_before)}}" class="img-fluid">
                </td>
                <td>
                    <img src="{{asset('.pekerjaan/'.$row->foto_progress)}}" class="img-fluid">
                </td>
                <td>
                    <img src="{{asset('.pekerjaan/'.$row->foto_after)}}" class="img-fluid">
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>
    <input type="hidden" name="action_task" value="" />

    {!! Form::close() !!}


    <!-- End Table Grid -->

</div>
@include('footer')
<script>
    $(document).ready(function () {
        $('.copy').click(function () {
            var total = $('input[class="ids"]:checkbox:checked').length;
            if (confirm('are u sure Copy selected rows ?')) {
                $('input[name="action_task"]').val('copy');
                $('#SximoTable').submit(); // do the rest here	
            }
        })

    });

</script>

@stop
