<tr>
    <td class="text-nowrap">{{ $objCraft->created_at->format('j.n. H:i') }}</td>

    <td><img src="images/icons/{{ $objCraft->icon }}" class="rounded" width="16" height="16" alt=""> {{ $objCraft->enchant->name }}</td>

    <td class="text-capitalize">{{ $objCraft->mats }}</td>

    <td class="text-nowrap"><a href="" class="btn btn-secondary btn-sm disabled"><i class="fas fa-edit"></i> Edit</a></td>

    <td class="text-nowrap">
        <form action="{{ route('crafts.destroy', $objCraft->id) }}" method="POST">
            @csrf

            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm delete-confirm"><i class="fas fa-trash"></i> Delete</button>
        </form>
    </td>
</tr>