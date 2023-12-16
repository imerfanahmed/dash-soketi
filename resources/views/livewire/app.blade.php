<div class="container-xl">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs flex-column card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item h2 m-1 p-1" role="presentation">
                            <a href="#overview" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-octagon mx-1"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item h2 m-1" role="presentation">
                            <a href="#credential" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-lock mx-1"></i>
                                Credentials
                            </a>
                        </li>

                        <li class="nav-item h2 m-1" role="presentation">
                            <a href="#webhooks" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-fish-hook mx-1"></i>
                                Webhooks
                            </a>
                        </li>

                        <li class="nav-item h2 m-1" role="presentation">
                            <a href="#configuration" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-filter-cog mx-1"></i>
                                Configuration
                            </a>
                        </li>
                        <li class="nav-item h2 m-1" role="presentation">
                            <a href="#debug" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-bug mx-1"></i>
                                Debug
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="overview" role="tabpanel">
                            <livewire:overview/>
                        </div>

                        <div class="tab-pane" id="credential" role="tabpanel">
                            <livewire:credentials :app="$app"/>
                        </div>

                        <div class="tab-pane" id="webhooks" role="tabpanel">
                            <livewire:webhooks/>
                        </div>

                        <div class="tab-pane" id="configuration" role="tabpanel">
{{--                            <livewire:configuration/>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
