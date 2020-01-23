<div class="btn-group btn-group-toggle d-flex mb-2" data-toggle="buttons">
    <label class="btn btn-first">
        <input type="radio" name="mats" id="mats1" value="own" {{ $checkedMats == 'own' ? 'checked' : '' }}> Own
    </label>

    <label class="btn btn-first">
        <input type="radio" name="mats" id="mats2" value="my" {{ $checkedMats == 'my' ? 'checked' : '' }}> My
    </label>
</div>