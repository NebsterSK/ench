<div class="classSelector d-flex justify-content-between">
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class10" name="class" class="custom-control-input" value="druid" {{ $checkedClass == 'druid' ? 'checked' : '' }}>
        <label class="custom-control-label druid" for="class10"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class11" name="class" class="custom-control-input" value="hunter" {{ $checkedClass == 'hunter' ? 'checked' : '' }}>
        <label class="custom-control-label hunter" for="class11"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class12" name="class" class="custom-control-input" value="mage" {{ $checkedClass == 'mage' ? 'checked' : '' }}>
        <label class="custom-control-label mage" for="class12"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class13" name="class" class="custom-control-input" value="paladin" {{ $checkedClass == 'paladin' ? 'checked' : '' }}>
        <label class="custom-control-label paladin" for="class13"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class14" name="class" class="custom-control-input" value="priest" {{ $checkedClass == 'priest' ? 'checked' : '' }}>
        <label class="custom-control-label priest" for="class14"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class15" name="class" class="custom-control-input" value="rogue" {{ $checkedClass == 'rogue' ? 'checked' : '' }}>
        <label class="custom-control-label rogue" for="class15"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class16" name="class" class="custom-control-input" value="shaman" {{ $checkedClass == 'shaman' ? 'checked' : '' }}>
        <label class="custom-control-label shaman" for="class16"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class17" name="class" class="custom-control-input" value="warlock" {{ $checkedClass == 'warlock' ? 'checked' : '' }}>
        <label class="custom-control-label warlock" for="class17"></label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="class18" name="class" class="custom-control-input" value="warrior" {{ $checkedClass == 'warrior' ? 'checked' : '' }}>
        <label class="custom-control-label warrior" for="class18"></label>
    </div>
</div>