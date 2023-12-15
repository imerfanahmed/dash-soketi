<div class="container-xl" wire:ignore>
    <div class="row">
        @foreach($apps as $app)
            <div class="col-md-3 my-2"  wire:key="app-{{ $app->id }}">
                <a class="card" href="#" wire:key="app-{{ $app->id }}">
                    <div class="card-header">
                        <h1 class="card-title">
                            <i class="ti ti-id-badge"></i>
                            {{ $app->name }}
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="ti ti-id"></i>
                                {{ $app->id}}
                            </div>
                            <div>
                                <i class="ti ti-key"></i>
                                {{ $app->key}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modal-new-app" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
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
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <i class="ti ti-plus"></i>
                            Create new APP
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('closeModal', () => {
        Livewire.on('closeModal', (event) => {
            //hide modal using vanilla js
            var myModalEl = document.getElementById('exampleModal')
            var modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide()

        });
    });
</script>




