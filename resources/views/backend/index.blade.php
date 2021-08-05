@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">@lang("Welcome to", ['name'=>config('app.name')])</h4>
                    <div class="small text-muted">{{ date_today() }}</div>
                </div>

                <div class="col-sm-4 hidden-sm-down">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <button type="button" class="btn btn-info float-right">
                            <i class="c-icon cil-bullhorn"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Dashboard Content Area -->

            <!-- / Dashboard Content Area -->

        </div>
    </div>
    <!-- / card -->
    <div class="row">
        @can('view_users')
            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-gradient-primary">
                    <div class="card-body">
                        <div class="text-value-lg">{{ App\Models\User::count() }}</div>
                        <div>Users</div>
                        <div class="progress progress-white progress-xs my-2">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div><small class="text-muted">Total Number of Users in Online Branding System.</small>
                    </div>
                </div>
            </div>
        @endcan

        @can('view_posts')
            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-gradient-warning">
                    <div class="card-body">
                        <div class="text-value-lg">{{ Modules\Article\Entities\Post::count() }}</div>
                        <div>Post</div>
                        <div class="progress progress-white progress-xs my-2">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div><small class="text-muted">Total Number of Post in Online Branding System.</small>
                    </div>
                </div>
            </div>
        @endcan
        <div class="col-sm-6 col-lg-6">
            <div class="card text-white bg-gradient-danger">
                <div class="card-body">
                    <div class="text-value-lg">{{ Modules\Article\Entities\Category::count() }}</div>
                    <div>Category</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div><small class="text-muted">Total Number of Category in Online Branding System</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="card text-white bg-gradient-info">
                <div class="card-body">
                    <div class="text-value-lg">+$100</div>
                    <div>Profit</div>
                    <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div><small class="text-muted">Total increase in your Products</small>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div id="piechart"></div>
                    <div class="text-value-lg">89.9%</div>
                    <div></div>
                    <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><small class="text-muted">Widget helper text</small>
                </div>
            </div>
        </div>
    </div>
    @php

    $dataCategory = Modules\Article\Entities\post::with('category')->get('name');
    echo $dataCategory;

    // foreach ($dataCategory as $key => $value) {
    //     $chartData =
    // }

    @endphp
@endsection


@push('after-scripts')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data1 = <?php json_encode($dataCategory); ?>
            console.log(data1);
            var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Italy', 54.8],
                ['France', 48.6],
                ['Spain', 44.4],
                ['USA', 23.9],
                ['Argentina', 14.5]
            ]);
            // console.log(typeof data1);
            var options = {
                title: 'World Wide Wine Production',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
@endpush
