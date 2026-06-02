<html>
    <head>
        <title>PGS Analytics Dashboard</title>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

<div class="container-fluid" style="background:#F4F7FC;">

    <div class="row mb-4">
        <div class="col-md-3 mt-4">
            <div class="card shadow-sm" style="background-color:#FFFFFF;">
                <div class="card-body">
                    <h5>Today's Occupancy</h5>
                    <h2>{{ isset($todayOccupancy) ? round($todayOccupancy, 2) . '%' : '0%' }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-4"></div>

        <div class="col-md-3 mt-4">
            <a href="{{ route('check.camera.status') }}" class="btn btn-primary">Camera Status</a>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Parking Heatmap
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Total Slots</th>
                                <th>Occupied</th>
                                <th>Occupancy %</th>
                            </tr>
                        </thead>
                        <tbody id="heatmap-body">
                            @forelse(($heatmap ?? []) as $row)
                                @php
                                    $percent = (($row->occupied ?? 0) / max(($row->total ?? 1), 1)) * 100;
                                @endphp

                                <tr>
                                    <td>{{ $row->parking_location ?? '-' }}</td>
                                    <td>{{ $row->total ?? 0 }}</td>
                                    <td>{{ $row->occupied ?? 0 }}</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: {{ $percent }}%">{{ round($percent, 2) }}%</div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <form method="GET">
            <div class="row">
                <div class="col-md-3">
                    <select name="location" class="form-control">
                        <option value="">All Location</option>
                        <option value="Basement -1" {{ request('location') == 'Basement -1' ? 'selected' : '' }}>Basement -1</option>
                        <option value="Basement -2"{{ request('location') == 'Basement -2' ? 'selected' : '' }}>Basement -2</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" name="date" value="{{ $date }}" class="form-control">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Monthly Occupancy Graph</div>
                <div class="card-body">
                    <canvas id="monthlyChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Peak Hour Graph</div>
                <div class="card-body">
                    <canvas id="hourChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-9 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Daily Occupancy Graph</div>
                <div class="card-body">
                    <canvas id="dailyChart"></canvas>
                </div>
            </div>
        </div>

    </div>

</div>  

<script>

new Chart(document.getElementById('dailyChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($dailyGraph->pluck('day')) !!},
        datasets: [{
            label: 'Occupancy',
            data: {!! json_encode($dailyGraph->pluck('vehicle_count')) !!}
        }]
    }
});

new Chart(document.getElementById('monthlyChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($monthlyGraph->pluck('month')) !!},
        datasets: [{
            label: 'Monthly Occupancy',
            data: {!! json_encode($monthlyGraph->pluck('vehicle_count')) !!}
        }]
    }
});

new Chart(document.getElementById('hourChart'), {
    type: 'line',
    data: {
        labels: {!! json_encode($peakHour->pluck('hour')) !!},
        datasets: [{
            label: 'Peak Hour Occupancy',
            data: {!! json_encode($peakHour->pluck('vehicle_count')) !!}
        }]
    },
    options: { 
        plugins: {
            tooltip: {
                callbacks: {
                    title: function(context)
                    {
                        let hour = context[0].label;
                        let ampm =
                            hour >= 12 ? 'PM' : 'AM';
                        let formattedHour =
                            hour % 12 || 12;
                        return formattedHour + ':00 ' + ampm;
                    }
                }
            }
        }
    }
});

function loadHeatmap()
{
    $.ajax({
        url: "/heatmap-data",
        type: "GET",

        success: function(response)
        {
            let html = '';

            response.forEach(function(row)
            {
                let percent =
                    ((row.occupied / row.total) * 100).toFixed(2);

                html += `
                    <tr>
                        <td>${row.parking_location}</td>
                        <td>${row.total}</td>
                        <td>${row.occupied}</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width:${percent}%">${percent}%</div>
                            </div>
                        </td>
                    </tr>
                `;
            });

            $('#heatmap-body').html(html);
        }
    });
}

loadHeatmap();

// Refresh every 10 seconds
setInterval(loadHeatmap, 10000);

</script>

</body>
</html>