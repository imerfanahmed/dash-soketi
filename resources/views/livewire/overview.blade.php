<div>

        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">App Overview</h3>
            <div class="div">
                <h3 class="h3 text-{{$app->enabled?"green":"danger"}}">
                    App {{$app->enabled?"Enabled":"Disabled"}}
                </h3>
                <smal>
                    Created: {{$app->created_at->diffForHumans()}}
                </smal>
            </div>

        </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-blue">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <i class="ti ti-id"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">App name</h3>
                        <p class="text-secondary">{{$app->name}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-blue">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <i class="ti ti-cards"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">App ID</h3>
                        <p class="text-secondary">{{$app->id}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-blue">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <i class="ti ti-key"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">App Key</h3>
                        <p class="text-secondary">{{$app->key}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-blue">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <i class="ti ti-password"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">App Secret</h3>
                        <p class="text-secondary">{{Str::mask($app->secret,'*',2,6)}}</p>
                    </div>
                </div>
            </div>
        </div>
        @php
            $config = collect($app)->except(['name','id','secret','key','webhooks','created_at','updated_at']);
        @endphp
        <div class="row mt-3">
            <h1>App Configurations</h1>
            <div class="table border p-2">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                        <tr>
                            <th>Configuration</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($config as $key => $value)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{($value===-1 or $value===9999)? "∞":$value}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
