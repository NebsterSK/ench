<tr>
    <td class="text-nowrap">{{ $objCraft->created_at->format('j.n. H:i') }}</td>

    <td><img src="{{ mix('images/icons/slots/' . $objCraft->icon) }}" width="28" height="28" alt=""> {{ $objCraft->enchant->name }}</td>

    <td class="text-capitalize">{{ $objCraft->mats }}</td>

    <td class="text-nowrap">{{ ($objCraft->price == '') ? '' : number_format($objCraft->price, 2, ',', ' ') . ' g' }}</td>

    <td class="text-capitalize">{{ $objCraft->buyer }}</td>

    <td>
        @if($objCraft->classIcon != null)
            <img src="{{ mix('images/icons/classes/' . $objCraft->classIcon) }}" class="d-block mx-auto" width="28" height="28" alt="">
        @endif
    </td>

    <td class="text-nowrap"><a href="{{ route('crafts.edit', $objCraft->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a></td>

    <td class="text-nowrap">
        <form action="{{ route('crafts.destroy', $objCraft->id) }}" method="POST">
            @csrf

            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm delete-confirm"><i class="fas fa-trash"></i> Delete</button>
        </form>
    </td>
</tr>