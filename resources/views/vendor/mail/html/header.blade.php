<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="{{ route('images', ['type' => 'logo', 'size' => 70]) }}" class="logo" alt="Laravel Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
