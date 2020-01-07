<tr>
    <td class="text-capitalize">{{ $objClass->class }}</td>

    <td class="text-right">{{ $objClass->count }}</td>

    <td class="text-right text-nowrap">{{ number_format($objClass->perc, 1, ',', ' ') }} %</td>
</tr>