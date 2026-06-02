<html>
    <head>
        <title>PGS Analytics Dashboard</title>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>

<div class="container-fluid" style="background:#F4F7FC;">

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Camera Status</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>IP Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($cameras as $camera)
                                    <tr>
                                        <td>{{ $camera->name }}</td>
                                        <td>{{ $camera->ip_address }}</td>
                                        @if($camera->status == "online")
                                            <td><button class="btn btn-success">{{ $camera->status }}</button></td>
                                        @else
                                            <td><button class="btn btn-danger">{{ $camera->status }}</button></td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            {{ $cameras->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>