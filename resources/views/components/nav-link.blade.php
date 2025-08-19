{{-- <li><a href="/{{ lcfirst($slot) ?? "" }}">@if ($slot == "") Home @else {{ $slot }} @endif</a></li> --}}
<li><a {{ $attributes }}>{{ $slot }}</a></li>
