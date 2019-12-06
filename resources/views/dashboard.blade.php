@extends('layouts/main')

@section('head')
    @parent
    <meta http-equiv="refresh" content="1800">
@endsection

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-12 col-lg-2">
                <h2>Detailed craft</h2>

                <form action="{{ route('crafts.store') }}" method="POST">
                    @csrf

                    <label>Mats</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="mats" id="mats1" value="own" checked> Own
                        </label>

                        <label class="btn btn-primary">
                            <input type="radio" name="mats" id="mats2" value="my"> My
                        </label>
                    </div>

                    <div class="form-group mt-2">
                        <label for="enchant_id">Enchant</label>
                        <select class="form-control" id="enchant_id" name="enchant_id">
                            @foreach($arrEnchants as $objEnchant)
                                <option value="{{ $objEnchant->id }}">{{ $objEnchant->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-block">Craft</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-lg-3">
                <h2>Quick craft</h2>

                <form action="{{ route('crafts.store') }}" method="POST">
                    @csrf

                    <label>Mats</label>
                    <div class="btn-group btn-group-toggle d-flex mb-2" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="mats" id="mats1" value="null" checked> Not set
                        </label>

                        <label class="btn btn-primary">
                            <input type="radio" name="mats" id="mats2" value="my"> Own
                        </label>

                        <label class="btn btn-primary">
                            <input type="radio" name="mats" id="mats3" value="my"> My
                        </label>
                    </div>

                    <label>Enchant</label>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>

                            <th scope="col">Enchant</th>

                            <th scope="col">Count</th>

                            <th scope="col">Craft</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($arrTopEnchants as $objEnchant)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $objEnchant->name }}</td>

                                <td class="text-right">{{ $objEnchant->crafts_count }}</td>

                                <td><button type="submit" name="enchant_id" value="{{ $objEnchant->id }}" class="btn btn-primary btn-block btn-sm">Craft</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="col-12 col-lg-7">
                <h2>Top enchants</h2>

                <div>
                    {!! $objChart->container() !!}
                </div>

                <h2>Recent crafts</h2>

                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Crafted at</th>

                            <th scope="col">Enchant</th>

                            <th scope="col">Mats</th>

                            <th scope="col"></th>

                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($arrRecentCrafts as $objCraft)
                            <tr>
                                <td>{{ $objCraft->created_at->format('j.n. H:i') }}</td>

                                <td>{{ $objCraft->enchant->name }}</td>

                                <td class="text-capitalize">{{ $objCraft->mats }}</td>

                                <td><a href="" class="">Edit</a></td>

                                <td><a href="" class="">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $objChart->script() !!}
@endsection
