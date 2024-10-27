@extends('layouts.app')
{{-- @extends('map') --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky pt-3">
                <h5 class="px-3 mt-4 mb-1 text-muted">Legend & Filters</h5>
                <div class="px-3">
                    <!-- Collection Points -->
                    <div class="mb-3">
                        <h6>Collection Points</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="legalPoints" checked>
                            <label class="form-check-label" for="legalPoints">
                                Legal Points <span class="badge bg-success">●</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="illegalPoints" checked>
                            <label class="form-check-label" for="illegalPoints">
                                Illegal Points <span class="badge bg-danger">●</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dumpingSites" checked>
                            <label class="form-check-label" for="dumpingSites">
                                Dumping Sites <span class="badge bg-warning">●</span>
                            </label>
                        </div>
                    </div>

                    <!-- Waste Dealers -->
                    <div class="mb-3">
                        <h6>Waste Dealers</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wasteDealers" checked>
                            <label class="form-check-label" for="plasticDealers">Plastic</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="metalDealers" checked>
                            <label class="form-check-label" for="metalDealers">Metal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="paperDealers" checked>
                            <label class="form-check-label" for="paperDealers">Paper</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hazardDealers" checked>
                            <label class="form-check-label" for="hazardDealers">Hazardous</label>
                        </div>
                    </div>
                    <!-- Recycling Centers -->
                    <div class="mb-3">
                        <h6>Recycling Centers</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="recyclingCenters" checked>
                            <label class="form-check-label" for="plasticRecycling">Plastic</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="metalRecycling" checked>
                            <label class="form-check-label" for="metalRecycling">Metal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="paperRecycling" checked>
                            <label class="form-check-label" for="paperRecycling">Paper</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hazardRecycling" checked>
                            <label class="form-check-label" for="hazardRecycling">Hazardous</label>
                        </div>
                    </div>

                    <!-- Stakeholders -->
                    <div class="mb-3">
                        <h6>Stakeholders</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="stakeholders" checked>
                            <label class="form-check-label" for="stakeholders">Show All</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h2">Tanzania Waste Management Map</h1>
            </div>
            <div id="map"></div>
        </main>
    </div>
</div>
@endsection

