<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
    <title>Laporan</title>
    <link href="{{ asset('sximo5/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('sximo5/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
    
@page {
    size: A4;
    margin: 0;
    margin-top: 20mm;
      margin-bottom: 20mm;
  }
  
  @media print {
    html, body {
      width: 210mm;
      height: 297mm;
     
    }
    .header, .hide { visibility: hidden }
  }
  @font-face {
      font-family: trebuc;
      src: url("{{ asset('sximo5/fonts/trebuc.ttf') }}");
  }
  .table-bordered td, .table-bordered th {
    border: 1px solid #000000 !important;
}
.invoice-box {
    width: 250mm;
    margin: auto;
    
    font-size: 13px;
    font-family: "trebuc";
    letter-spacing: 1px;
    
    height: 297mm;
    background-color: #fff;
  }
  
  .invoice-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
    
  }
  
  .invoice-box table td {
    vertical-align: top;
    line-height: 15px;
  }
  
 
  .invoice-box table tr.top table td {
    padding-bottom: 0px;
  }
  
  .invoice-box table tr.top table td.title {
    font-size: 45px;
    line-height: 45px;
    color: #333;
  }
  
  .invoice-box table tr.information table td {
    padding-bottom: 0px;
    
  }

  .invoice-box table tr.information_quo table td {
    padding-bottom: 0px;
  }
  
  .invoice-box table tr.heading th {
    border-bottom: 3px solid #5e5959;
    font-weight: bold;
    border-top: 3px solid #5e5959;
    text-align: center;
    line-height: 10px;
  }
  
  
  .invoice-box table tr.details td {
    padding-bottom: 20px;
  }
  
  .invoice-box table tr.item td {
    border-bottom: 1px solid #eee;
  }
  
  .invoice-box table tr.item.last td {
    border-bottom: none;
  }
  
  .invoice-box table tr.item input {
    padding-left: 5px;
  }
  
  .invoice-box table tr.item td:first-child input {
    margin-left: -5px;
    width: 100%;
  }
  
  .invoice-box table tr.total td:nth-child(2) {
    border-top: 2px solid #eee;
    font-weight: bold;
  }
  
  .invoice-box input[type="number"] {
    width: 60px;
  }
  
  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  
    .invoice-box table tr.information table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  }
  
  /** RTL **/
  .rtl {
    direction: rtl;
    font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial,
      sans-serif;
  }
  
  .rtl table {
    text-align: right;
  }
  
  .rtl table tr td:nth-child(2) {
    text-align: left;
  }

  .nama_pt{
    font-size: 13px;
    font-weight: bold;
  }
  .alamat_pt{
    font-size: 13px;
  }
  .logo_pt{
    width: 120px;
    margin-right: 15px;
  }

  .judul{
    font-size: 20px;
    font-weight: bold;
  }
  .text-left{
    text-align: left !important;;
  }

  .box_bottom{
    top: 300px;
    position: relative;
    background-color: #fff;    
  }
  .box_bottom_quotation{
    position: relative;
    background-color: #fff;    
  }
  .md50{
      width: 50%;
      float: left;
      text-align: center;
      height: 10px;
  }
  .nama_pt2{   
    font-size: 18px;
    font-weight: bold;


  }
  .alamat_pt2{ 
    font-size: 13px;

  }
  .float_left{
    float: left;
    margin-right: 20px;
  }
  .nama_pt3{
    font-size: 13px;

  }
  .customer_address{
    text-align:left;
    padding-left: 10px;
    line-height: 15px;
    width: 300px;

  }
  .border_say{
    padding-top: 10px;
    border-top: 2px solid #5e5959;
    border-right: 2px solid #5e5959; 
     }
  .border_amount{
    border-top: 2px solid #5e5959;
    /* border-bottom: 4px double #5e5959; */
    /* height: 140px; */



  }
  .title_invoice{
    font-size: 30px;
    font-weight: bold;
    padding: 10px;

  }

.inv_right{
  line-height: 10px;
  
}
.col-md-8-n{
  width: 66.66666666666666%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-4-n{
  width: 33.33333333333333%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-7-n{
  width: 58.333333333333336%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-5-n{
  width: 41.66666666666667%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-6-n{
  width: 50%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-3-n{
  width: 25%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-1-n{
  width: 23%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
  
.col-md-9-n{
  width: 75%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-2-n{
  width: 19%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-10-n{
  width: 81%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-12-n{
  width: 100%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}



  
    </style>

    </head>
    <?php  
$array_bln = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
$bln = $array_bln[date('n')];
        
;?>
    <body>
        
        <page size="A4">
            <div class="invoice-box" id="listApp">
              <div style="text-align: center;margin-top: 20px;font-size:17px;">
                <span>
                  <b>Laporan Pekerjaan</b> <br>
                  <b>Periode {{date("d-m-Y", strtotime($tanggal_pekerjaan))}}</b>
                </span>
              </div>
                
                
             
                <div class="row" style="margin-top: 20px; height: auto;">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="heading">
                                    <th style="width:10px;"> NO</th>
                                    <th style="width:200px;">Leader</th>
                                     <th style="width:200px;">Cabang</th>
                                     <th style="width:200px;">Tanggal Pekerjaan</th>
                                     <th style="width:200px;">Waktu Pekerjaan</th>
                                     <th style="width:200px;">Deskripsi Pekerjaan</th>
                                     <th style="width:200px;">Foto Before</th>
                                     <th style="width:200px;">Foto progress</th>
                                     <th style="width:200px;">Foto After</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                          
                          
                              <?php $no = 1;?>
                               @foreach($cetak as $row)
                                <tr>
                                    <td style="padding-top: 10px;">{{$no++}}</td>
                                    <td style="padding-top: 10px;">{{ $row->leader }}</td>
                                    <td style="padding-top: 10px;">{{ $row->nama_cabang_divisi }}</td>
                                    <td style="padding-top: 10px;">{{date("d-m-Y", strtotime($row->tanggal_pekerjaan))}}</td>
                                    <td style="padding-top: 10px;">{{ $row->waktu_kerja }}</td>
                                    <td style="padding-top: 10px;">{{ $row->deskripsi_pekerjaan }}</td>
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
    
                    </div>
    
                </div>
                
                
                
                
                
            </div>
        </page>
        
    
       
        <script type="text/javascript">
   setTimeout(function() { 
        window.print();
   }, 1000);
</script>
    </body>
</html>
