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

<svg xmlns="http://www.w3.org/2000/svg" width="14.268" height="15.616" viewBox="0 0 14.268 15.616" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_896" data-name="Tracciato 896" d="M16.251,23.06H5.471a1.744,1.744,0,0,1-1.71-2.086l.727-3.637A2.914,2.914,0,0,1,7.339,15h7.045a2.914,2.914,0,0,1,2.85,2.337l.727,3.637a1.744,1.744,0,0,1-1.71,2.086Zm-8.912-6.9a1.749,1.749,0,0,0-1.71,1.4L4.9,21.2a.582.582,0,0,0,.57.7h10.78a.582.582,0,0,0,.57-.7l-.727-3.637a1.749,1.749,0,0,0-1.71-1.4Z" transform="translate(-3.727 -7.443)" fill="currentColor"/><path id="Tracciato_897" data-name="Tracciato 897" d="M13.7,8.394a3.2,3.2,0,1,1,3.2-3.2A3.2,3.2,0,0,1,13.7,8.394Zm0-5.232A2.034,2.034,0,1,0,15.732,5.2,2.034,2.034,0,0,0,13.7,3.163Z" transform="translate(-6.563 -2)" fill="currentColor"/>
</svg>
