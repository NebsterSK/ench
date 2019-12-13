@extends('layouts/main')

@section('title', 'Crafts - Classic Enchanter')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1>Crafts</h1>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="pagination-right">
                            {!! $arrCrafts->links() !!}
                        </div>
                    </div>
                </div>

                <table class="table table-bordered table-striped">
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
                    @each('components/craftTableLine', $arrCrafts, 'objCraft')
                    </tbody>
                </table>

                <div class="pagination-center">
                    {!! $arrCrafts->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection