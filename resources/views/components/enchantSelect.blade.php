<select class="form-control form-control-lg select-picker" id="enchant_id" name="enchant_id" data-live-search="true">
    @foreach($enchantGroups as $key => $enchants)
        <optgroup label="{{ $key }}">
            @foreach($enchants as $enchant)
                <option value="{{ $enchant->id }}" {{ $enchant->id == $selectedId ? 'selected' : '' }}>{{ $enchant->name }}</option>
            @endforeach
        </optgroup>
    @endforeach
</select>