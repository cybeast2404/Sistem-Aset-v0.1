@extends('layout')

@section('content')
<section class="content-header">


      <div class="row">
      	 <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$items}}<sup style="font-size: 20px"></sup></h3>

              <p>JUMLAH ASET</p>
            </div>
            <div class="icon">
            	 <i class="ion ion-ios-box"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
        
              <h3>{{$assets}}</h3>
              <p>ASET BERDAFTAR BULAN INI</p>
 		
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>RM{{$costmonth}}</h3>
              <p>KOS ASET BERDAFTAR BULAN INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>RM{{$costyear}}</h3>

              <p>KOS ASET BERDAFTAR TAHUN INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>

    
 <div class="col-lg-6 col-xs- 3">
   <table class="table table-bordered">
      <tr>
        <th colspan=7><center>Aset terkini</center></th>
        <tr>
      <tr>
        <th>Bil</th>
        <th>Nama aset</th>
        <th>penerangan</th>
      </tr>
       @foreach($l_asset as $l_asset)
      <tr>
        <td>{{$loop->index}}</td>
          <td>{{$l_asset->name}}</td>
          <td>{{$l_asset->description}}</td>
      </tr>
      @endforeach
    </table>
</div>

 <div class="col-lg-6 col-xs- 3">
    <table class="table table-bordered">
      <tr>
        <th colspan=7><center>Aset Item terkini</center></th>
        <tr>
      <tr>
        <th>Bil</th>
        <th>Nombor item</th>
        <th>Lokasi</th>
      </tr>
      @foreach($l_items as $l_items)
      <tr>
        <td>{{$loop->index}}</td>
          <td>{{$l_items->asset_no}}</td>
          <td>{{$l_items->location}}</td>
      </tr>
      @endforeach

    </table>
</div>
   

        <!-- ./col -->
      </div>
@endsection