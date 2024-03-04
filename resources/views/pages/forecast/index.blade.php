@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Prakiraan Cuaca</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="body">
          <div id="openweathermap-widget-2"></div>
          <div class="card-body">
            @foreach($data_forecast_today as $item)
              Cuaca Hari ini : {{$item['main']}} <br><br>
            @endforeach
          </div>
          <div id="openweathermap-widget-1"></div>
        </div>
      </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection

<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
  window.myWidgetParam.push({
    id: 2,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-2',
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);
  })();
</script>
<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  
  window.myWidgetParam.push({
    id: 1,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-1',  
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);  
  })();
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>