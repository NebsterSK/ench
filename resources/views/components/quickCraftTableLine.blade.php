<tr>
    <td>{{ $loop->iteration }}</td>

    <td class="text-nowrap">
        <img src="images/icons/{{ $objEnchant->icon }}" class="rounded" width="24" height="24" alt="">
        {{ $objEnchant->name }}
    </td>

    <td class="text-nowrap">
        <button type="submit" name="enchant_id" value="{{ $objEnchant->id }}" class="btn btn-first btn-block btn-sm"><i class="far fa-plus-square"></i> Craft</button>
    </td>

    <td class="text-right">{{ $objEnchant->crafts_count }}</td>
</tr>