<!DOCTYPE html>
<html>
    <head>
        <title>Report Data Bulanan Telemetering Device 2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 6pt;
            }
        </style>
        <center>
            <h5>Report Data Sensor</h5>
        </center>
        <table class='table table-bordered'>
            <thead>
            <tr>
                <th>#</th>
                <th>WAKTU</th>
                <th>CO2</th>
                <th>O3</th>
                <th>H2S</th>
                <th>DUST</th>
                <th>NH3</th>
                <th>NO2</th>
                <th>TEMP</th>
                <th>HUMID</th>
                <th>PRESSURE</th>
                <th>RAIN</th>
                <th>WIND SPEED</th>
                <th>WIND DIRECT</th>
            </tr>
            </thead>
        <tbody>
        @php 
            $no=1 
        @endphp
        @foreach($Tele2History as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{date('Y-m-d H:i:s', strtotime($item->waktu))}}</td>
                <td>{{$item->sensor_CO}}</td>
                <td>{{$item->sensor_O3}}</td>
                <td>{{$item->sensor_H2S}}</td>
                <td>{{$item->sensor_DUST}}</td>
                <td>{{$item->sensor_NH3}}</td>
                <td>{{$item->sensor_NO2}}</td>
                <td>{{$item->sensor_TEMPERATURE}}</td>
                <td>{{$item->sensor_HUMIDITY}}</td>
                <td>{{$item->sensor_PRESSURE}}</td>
                <td>{{$item->sensor_RAIN}}</td>
                <td>{{$item->sensor_WIND_SPEED}}</td>
                <td>{{$item->sensor_WIND_DIRECT}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </body>
</html>