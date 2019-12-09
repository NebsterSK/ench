<tr>
    <td>{{ $loop->iteration }}</td>

    <td>{{ $objEnchant->name }}</td>

    <td class="text-right text-nowrap">{{ $objEnchant->crafts_count }}</td>

    <td class="text-nowrap"><button type="submit" name="enchant_id" value="{{ $objEnchant->id }}" class="btn btn-first btn-block btn-sm"><i class="far fa-plus-square"></i> Craft</button></td>
</tr>