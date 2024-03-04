@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="card-header">
          <h1>Visualisasi Grafik Data Device 1</h1>
        </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Kualitas Udara -->
        <div class="card-body">
          <h3>Telemetering Kualitas Udara</h3>
          <div class="card-body">
            <h4>Sensor CO2</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=CO&type=line&update=15&yaxis=ppm"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382342"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor O3</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/2?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=O3&type=line&update=15&yaxis=ppb"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382365"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor H2S</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/3?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=H2S&type=line&update=15&yaxis=ppm"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382389"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor Debu</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/4?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Dust+Density&type=line&update=15&yaxis=mg%2Fm3"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382945"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor NH3</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/5?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=NH3&type=line&update=15&yaxis=ppm"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382950"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor NO2</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/charts/6?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=NO2&type=line&update=15&yaxis=ppm"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549480/widgets/382951"></iframe>
          </div>
        </div>
        <!-- Cuaca -->
        <div class="card-body">
          <h3>Telemetering Cuaca</h3>
          <div class="card-body">
            <h4>Sensor Suhu</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Temperature&type=line&update=15&yaxis=deg+C"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/widgets/382111"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor Kelembaban</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/charts/2?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Humidity&type=line&update=15&yaxis=%25"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/widgets/382103"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor Tekanan Udara</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/charts/3?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Pressure&type=line&update=15&yaxis=hPa"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/widgets/382091"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor Curah Hujan</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/charts/4?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Rainfall&type=line&update=15&yaxis=mm"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/widgets/382113"></iframe>
          </div>
        </div>
        <!-- Keadaan Angin -->
        <div class="card-body">
          <h3>Telemetering Kecepatan dan Arah Angin</h3>
          <div class="card-body">
            <h4>Sensor Kecepatan Angin</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1548674/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Wind+speed&type=line&update=15&yaxis=Km%2Fh"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1548674/widgets/381997"></iframe>
          </div>
          <div class="card-body">
            <h4>Sensor Arah Angin</h4>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1548674/charts/2?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Wind+direction&type=line&update=15&yaxis=deg"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1548674/widgets/381998"></iframe>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/436403"></iframe>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection