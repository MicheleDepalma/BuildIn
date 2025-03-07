@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
	'variant' => 'outline',
])

@php
$classes = Flux::classes('shrink-0')
->add(match($variant) {
	'outline' => '[:where(&)]:size-6',
	'solid' => '[:where(&)]:size-6',
	'mini' => '[:where(&)]:size-5',
	'micro' => '[:where(&)]:size-4',
});
@endphp

<svg xmlns="http://www.w3.org/2000/svg" width="16.902" height="18.5" viewBox="0 0 16.902 18.5" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Layer_2" data-name="Layer 2"><path id="Tracciato_896" data-name="Tracciato 896" d="M18.564,24.548H5.793a2.066,2.066,0,0,1-2.026-2.471l.862-4.308A3.452,3.452,0,0,1,8.005,15h8.346a3.452,3.452,0,0,1,3.376,2.768l.862,4.309a2.066,2.066,0,0,1-2.026,2.471ZM8.005,16.377A2.072,2.072,0,0,0,5.98,18.038l-.862,4.308a.689.689,0,0,0,.675.824h12.77a.689.689,0,0,0,.675-.824l-.862-4.308a2.072,2.072,0,0,0-2.026-1.661Z" transform="translate(-3.727 -6.048)" fill="currentColor"/><path id="Tracciato_897" data-name="Tracciato 897" d="M14.287,9.575a3.787,3.787,0,1,1,3.787-3.787,3.787,3.787,0,0,1-3.787,3.787Zm0-6.2a2.41,2.41,0,1,0,2.41,2.41A2.41,2.41,0,0,0,14.287,3.377Z" transform="translate(-5.836 -2)" fill="currentColor"/></g>
</svg>
