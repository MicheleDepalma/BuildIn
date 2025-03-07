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

<svg xmlns="http://www.w3.org/2000/svg" width="11.002" height="13.43" viewBox="0 0 11.002 13.43" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_locator_grigio" data-name="Icona locator grigio" transform="translate(0.4 0.4)"><path id="Tracciato_900" data-name="Tracciato 900" d="M23.772,18.515A2.772,2.772,0,1,0,21,15.742,2.774,2.774,0,0,0,23.772,18.515Zm0-5.041A2.268,2.268,0,1,1,21.5,15.742,2.272,2.272,0,0,1,23.772,13.474Z" transform="translate(-18.691 -10.67)" fill="currentColor" stroke="currentColor" stroke-width="0.8"/><path id="Tracciato_902" data-name="Tracciato 902" d="M15.984,15.6a.248.248,0,0,0,.233,0c.2-.112,4.984-2.783,4.984-7.5A5.1,5.1,0,1,0,11,8.1C11,12.817,15.78,15.489,15.984,15.6ZM16.1,3.486A4.619,4.619,0,0,1,20.715,8.1c0,4.029-3.886,6.565-4.615,7-.729-.44-4.615-2.97-4.615-7A4.619,4.619,0,0,1,16.1,3.486Z" transform="translate(-11 -3)" fill="currentColor" stroke="currentColor" stroke-width="0.8"/></g>
</svg>
