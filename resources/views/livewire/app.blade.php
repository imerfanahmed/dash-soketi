<div class="container-xl">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">{{$app->name}}</h1>
                </div>
                    <ul class="nav list-group flex-column">
                        <li class="nav-item">
                            <a class="nav-link list-group-item list-group-item-action active" aria-current="page" data-toggle="tab" href="#1">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item list-group-item-action " aria-current="page" href="#2">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item list-group-item-action " aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item list-group-item-action" aria-current="page" href="#">Active</a>
                        </li>
                    </ul>
            </div>
        </div>



        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active show" id="1" role="tabpanel">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="1" role="tabpanel">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>App Credentials</h3>
                    <div>
                        <i class="ti ti-clock"></i>
                        Created : {{ $app->created_at->diffForHumans() }}
                    </div>
                </div>
                <div class="card-body">
                    <pre><code>
PUSHER_APP_ID = {{ $app->id }}
PUSHER_APP_KEY = {{ $app->key }}
PUSHER_APP_SECRET = {{ $app->secret }}
PUSHER_HOST = {{env('SOKETI_HOST')}}
PUSHER_PORT = {{env('SOKETI_PORT')}}</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>



</div>
