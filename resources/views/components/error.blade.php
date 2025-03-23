@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-error space-y-1']) }}>
        @foreach ((array) $messages as $message)
            @if (is_array($message))
                <x-error :messages="$message" />
            @else
                <li>{{ $message }}</li>
            @endif
        @endforeach
    </ul>
@endif
