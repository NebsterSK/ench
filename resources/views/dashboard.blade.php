@extends('layouts/main')

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
                        <label class="btn btn-secondary active">
                            <input type="radio" name="mats" id="mats1" value="own" checked> Own
                        </label>

                        <label class="btn btn-secondary">
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-lg-3">
                <h2>Quick craft</h2>

                <label>Mats</label>
                <div class="btn-group btn-group-toggle d-flex mb-2" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="mats" id="mats1" value="own" checked> Own
                    </label>

                    <label class="btn btn-secondary">
                        <input type="radio" name="mats" id="mats2" value="my"> My
                    </label>
                </div>

                <label>Enchant</label>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Enchant</th>

                        <th scope="col">Count</th>

                        <th scope="col">Craft</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($arrTopEnchants as $objEnchant)
                        <tr>
                            <td>{{ $objEnchant->name }}</td>

                            <td>{{ $objEnchant->crafts_count }}</td>

                            <td><a href="" class="btn btn-primary btn-block btn-sm">Craft</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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

                            <th scope="col"></th>

                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($arrRecentCrafts as $objCraft)
                            <tr>
                                <td>{{ $objCraft->created_at->format('j.n.Y H:i:s') }}</td>

                                <td>{{ $objCraft->enchant->name }}</td>

                                <td><a href="" class="">Edit</a></td>

                                <td><a href="" class="">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $objChart->script() !!}
@endsection
