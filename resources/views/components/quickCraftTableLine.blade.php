<tr>
    <td>{{ $loop->iteration }}</td>

    <td>
        <img src="{{ mix('images/icons/slots/' . $objEnchant->icon) }}" width="28" height="28" alt="">
        {{ $objEnchant->name }}
    </td>

    <td class="text-nowrap">
        <button type="submit" name="enchant_id" value="{{ $objEnchant->id }}" class="btn btn-first btn-block btn-sm"><i class="far fa-plus-square"></i> Craft</button>
    </td>
</tr>