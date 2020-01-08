<tr>
    <td class="text-capitalize">
        @if($objCraft->classIcon != null)
            <img src="{{ mix('images/icons/classes/' . $objCraft->classIcon) }}" width="28" height="28" alt="">
        @endif
        {{ $objCraft->class }}
    </td>

    <td class="text-right">{{ $objCraft->count }}</td>

    <td class="text-right text-nowrap">{{ number_format($objCraft->perc, 1, ',', ' ') }} %</td>
</tr>