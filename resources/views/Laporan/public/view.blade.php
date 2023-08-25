<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tanggal Pekerjaan', (isset($fields['tanggal_pekerjaan']['language'])? $fields['tanggal_pekerjaan']['language'] : array())) }}</td>
						<td>{{ $row->tanggal_pekerjaan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Waktu Kerja', (isset($fields['waktu_kerja']['language'])? $fields['waktu_kerja']['language'] : array())) }}</td>
						<td>{{ $row->waktu_kerja}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Foto Before', (isset($fields['foto_before']['language'])? $fields['foto_before']['language'] : array())) }}</td>
						<td>{{ $row->foto_before}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Foto Progress', (isset($fields['foto_progress']['language'])? $fields['foto_progress']['language'] : array())) }}</td>
						<td>{{ $row->foto_progress}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Leader', (isset($fields['leader']['language'])? $fields['leader']['language'] : array())) }}</td>
						<td>{{ $row->leader}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Foto After', (isset($fields['foto_after']['language'])? $fields['foto_after']['language'] : array())) }}</td>
						<td>{{ $row->foto_after}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	