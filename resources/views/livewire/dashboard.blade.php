<div class="container-xl" wire:ignore>
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a class="btn btn-primary btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="ti ti-plus"></i>
                Create New App
            </a>
        </div>
    </div>
    <div class="row">
        @foreach($apps as $app)
            <div class="col-md-3 my-2"  wire:key="app-{{ $app->id }}">
                <a class="card" wire:navigate href="{{route('app',[$app->id])}}" wire:key="app-{{ $app->id }}">
                    <div class="card-header">
                        <h1 class="card-title">
                            <i class="ti ti-id-badge"></i>
                            Name : {{ $app->name }}
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div>
                                <i class="ti ti-id"></i>
                                ID : {{ $app->id}}
                            </div>
                            <div>
                                <i class="ti ti-key"></i>
                                Key : {{ $app->key}}
                            </div>
                            <div>
                                <i class="ti ti-password"></i>
                                Secret : {{ Str::mask($app->secret,'*',2,6) }}
                            </div>
                            <div>
                                <i class="ti ti-clock"></i>
                                Created : {{ $app->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="modal modal-blur fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-new-app">New App</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="saveApp">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">App Name</label>
                            <input wire:model="appName" type="text" class="form-control" name="example-text-input" placeholder="any-name">
                        </div>
                        <div>
                            @error('appName') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create App</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


