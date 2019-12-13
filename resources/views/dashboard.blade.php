@extends('layouts/main')

@section('head')
    @parent
    <meta http-equiv="refresh" content="1800">
@endsection

@section('title', 'Classic Enchanter')

@section('content')
    <div class="container-fluid">
        @include('includes/errors')

        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h2>Craft</h2>

                        <form action="{{ route('crafts.store') }}" method="POST">
                            @csrf

                            <label>Mats</label>
                            <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                <label class="btn btn-first active">
                                    <input type="radio" name="mats" id="mats1" value="own" checked> Own
                                </label>

                                <label class="btn btn-first">
                                    <input type="radio" name="mats" id="mats2" value="my"> My
                                </label>
                            </div>

                            <div class="form-group mt-2">
                                <label for="enchant_id">Enchant</label>
                                <select class="form-control form-control-lg" id="enchant_id" name="enchant_id">
                                    @each('components/enchantSelectOption', $arrEnchants, 'objEnchant')
                                </select>
                            </div>

                            <label for="price">Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="price" name="price" min="0.01" step="0.01">
                                <div class="input-group-append">
                                    <span class="input-group-text">g</span>
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label for="buyer">Buyer</label>
                                <input type="text" class="form-control" id="buyer" name="buyer" minlength="2" maxlength="20">
                            </div>

                            <hr>

                            <div class="text-right">
                                <button type="submit" class="btn btn-first btn-block"><i class="far fa-plus-square"></i> Craft</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h2>Quick craft</h2>

                        <form action="{{ route('crafts.store') }}" method="POST">
                            @csrf

                            <label>Mats</label>
                            <div class="btn-group btn-group-toggle d-flex mb-2" data-toggle="buttons">
                                <label class="btn btn-first active">
                                    <input type="radio" name="mats" id="mats1" value="null" checked> Not set
                                </label>

                                <label class="btn btn-first">
                                    <input type="radio" name="mats" id="mats2" value="own"> Own
                                </label>

                                <label class="btn btn-first">
                                    <input type="radio" name="mats" id="mats3" value="my"> My
                                </label>
                            </div>

                            <label>Enchant</label>
                            <table class="table table-bordered table-striped table-sm mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col" style="width:100%">Enchant</th>

                                    <th scope="col"></th>

                                    <th scope="col">Count</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($arrTopEnchants as $objEnchant)
                                    @component('components/quickCraftTableLine', [
                                        'objEnchant' => $objEnchant,
                                        'loop' => $loop
                                    ])@endcomponent
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Daily goal <small>{!! ($intToday >= 10) ? ' <i class="fas fa-check text-success"></i>' : '' !!}</small></h2>

                        <div class="progress">
                            <div class="progress-bar bg-first" role="progressbar" style="width: {{ ($intToday > 10) ? 100 : $intToday / 10 * 100 }}%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h2>Top enchants</h2>

                        <div style="height:300px">
                            {!! $objChart->container() !!}
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Recent crafts</h2>

                        <table class="table table-bordered table-striped table-sm mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="text-nowrap">Crafted at</th>

                                <th scope="col" style="width:100%">Enchant</th>

                                <th scope="col">Mats</th>

                                <th scope="col">Price</th>

                                <th scope="col">Buyer</th>

                                <th scope="col"></th>

                                <th scope="col"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @each('components/recentCraftTableLine', $arrRecentCrafts, 'objCraft')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $objChart->script() !!}
@endsection
