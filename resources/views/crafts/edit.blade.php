@extends('layouts/main')

@section('title', 'Craft edit - Classic Enchanter')

@section('content')
    <div class="container">
        <div class="card col-12 col-lg-6 offset-lg-3">
            <div class="card-body">
                <form action="{{ route('crafts.update', $craft->id) }}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="form-group mt-2">
                        <label for="enchant_id">Enchant</label>
                        @component('components/enchantSelect', [
                            'enchantGroups' => $enchantGroups,
                            'selectedId' => $craft->enchant_id
                        ])@endcomponent
                    </div>

                    <label>Mats</label>
                    @component('components/matsRadios', [
                        'checkedMats' => $craft->mats
                    ])@endcomponent

                    <label for="price">Price</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="price" min="0.01" step="0.01" value="{{ old('price') ?? $craft->price }}">
                        <div class="input-group-append">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="buyer">Buyer</label>
                        <input type="text" class="form-control" id="buyer" name="buyer" list="buyers" minlength="2" maxlength="20" value="{{ old('buyer') ?? $craft->buyer }}">
                    </div>

                    <label>Class</label>
                    @component('components/classSelector', [
                        'checkedClass' => $craft->class
                    ])@endcomponent

                    <hr>

                    <div class="text-right">
                        <button type="submit" class="btn btn-first"><i class="fas fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection