@extends('layouts/main')

@section('title', 'Statistics - Classic Enchanter')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h2>Materials</h2>

                        <div style="height:260px">
                            {!! $objMatsChart->container() !!}
                        </div>

                        <table class="table table-bordered table-striped table-sm mb-0 mt-2">
                            <thead>
                            <tr>
                                <th scope="col">Materials</th>

                                <th scope="col" class="text-right">Count</th>

                                <th scope="col" class="text-right">Percentage</th>
                            </tr>
                            </thead>

                            <tbody>
                            @each('components/matsTableLine', $arrMats, 'objMat')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h2>Most enchanted slot</h2>

                        <div style="height:260px">
                            {!! $objSlotChart->container() !!}
                        </div>

                        <table class="table table-bordered table-striped table-sm mb-0 mt-2">
                            <thead>
                            <tr>
                                <th scope="col">Slot</th>

                                <th scope="col" class="text-right">Count</th>

                                <th scope="col" class="text-right">Percentage</th>
                            </tr>
                            </thead>

                            <tbody>
                            @each('components/slotsTableLine', $arrSlots, 'objSlot')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Top enchants</h2>

                        <div style="height:330px">
                            {!! $objTopEnchantsChart->container() !!}
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Crafts per day</h2>

                        <div style="height:330px">
                            {!! $objCraftsChart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $objTopEnchantsChart->script() !!}
    {!! $objMatsChart->script() !!}
    {!! $objCraftsChart->script() !!}
    {!! $objSlotChart->script() !!}
@endsection