@php
    $segments = Request::segments();
    $url = url('/');
@endphp

<nav class="text-sm text-slate-600 mb-4">
    <a href="{{ url('/') }}" class="hover:underline">Home</a>

    @foreach ($segments as $segment)
        @php
            $url .= '/' . $segment;
        @endphp

        @if (!is_numeric($segment))
            &gt;
            @if ($loop->last)
                <span class="text-gray-500">
                    {{ ucfirst(str_replace('-', ' ', $segment)) }}
                </span>
            @else
                <a href="{{ $url }}" class="hover:underline">
                    {{ ucfirst(str_replace('-', ' ', $segment)) }}
                </a>
            @endif
        @endif
    @endforeach
</nav>
