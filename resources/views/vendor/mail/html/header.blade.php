@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Tim')
<img  src="{{asset('image/logo-tim.png')}}"  class="logo" alt="Tim Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
