@extends('dashboard.layouts.main')

@section('container')

<!-- Styles -->
<style>
    #chart {
      width: 100%;
      height: 300px;
    }
</style>



<!-- Page Heading -->
<h1 class="h3 mb-0 text-gray-800 me-auto text-center mb-3 p-2">Laporan Mahasiswa Siap Sidang</h1>
<div class="col mb-4">
    <div class="card">
        <div class="card-header">Barchar</div>
        <div class="card-body">
            <div id="chart">

            </div>
        </div>
    </div>
</div>
<h5 class="mb-3">Total Mahasiswa : 55 Orang</h5>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm mr-2 border"><i
            class="fas fa-download fa-sm text-black-50"></i> Cetak Laporan</a>

    <form action="/dashboard/laporan" method="get" class="d-none d-sm-inline-block shadow" >
                {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif --}}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn text-white" type="submit " style="background-color: #cc0000">Cari</button>
                </div>
    </form>
</div>
<!-- Content Row -->
<div class="row">

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Mahasiswa</th>
                    <th scope="col">Pbb 1</th>
                    <th scope="col">Pbb 2</th>
                    <th scope="col">Prediksi Sidang</th>
                    <th scope="col">Proyeksi Sidang</th>

                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $data)
                    <tr>
                        <td>{{ $datas->firstItem() + $key }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->pbb1 }}</td>
                        <td>{{ $data->pbb2 }}</td>
                        <td>{{ $data->periode_sidang,'MMM-YY' }}</td>
                        <td>{{ $data->periode_sidang,'MMM-YY' }}</td>

                        {{-- <td>
                            <a href="" class="badge bg-info"><i class="fas fa-fw fa-eye"></i></a>
                            <a href="" class="badge bg-warning"><i class="fas fa-fw fa-pen-to-square"></i></a>
                            <a href="" class="badge bg-danger"><i class="fas fa-fw fa-x"></i></a>
                        </td> --}}
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $datas->links() }}
        </div>
    </div>


</div>

<!-- Content Row -->

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
</div>



<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chart");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX:true
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: "country",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: am5xy.AxisRendererY.new(root, {})
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: "Series 1",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  sequencedInterpolation: true,
  categoryXField: "country",
  tooltip: am5.Tooltip.new(root, {
    labelText:"{valueY}"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5 });
series.columns.template.adapters.add("fill", function(fill, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", function(stroke, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});


// Set data
var data = [{
  country: "WIU",
  value: 7
}, {
  country: "DAN",
  value: 10
}, {
  country: "WHY",
  value: 8
}, {
  country: "ELR",
  value: 2
}, {
  country: "MBS",
  value: 5
}, {
  country: "ELT",
  value: 1
}, {
  country: "SKS",
  value: 6
}, {
  country: "SYN",
  value: 4
}, {
  country: "PRA",
  value: 9
}];

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

@endsection
