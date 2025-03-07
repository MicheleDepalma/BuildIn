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

<svg xmlns="http://www.w3.org/2000/svg" width="40.525" height="40.1" viewBox="0 0 40.525 40.1" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_offerta_inviata" data-name="Icona offerta inviata" transform="translate(0.412 0.324)"><path id="Tracciato_7674" data-name="Tracciato 7674" d="M42.978,3.412a2.769,2.769,0,0,0-2.891-.639l-28.9,11.048a2.766,2.766,0,0,0,.084,5.251l11.544,4.509,4.509,11.542a2.733,2.733,0,0,0,2.539,1.939h.093a2.736,2.736,0,0,0,2.608-1.833L43.639,6.245A2.738,2.738,0,0,0,42.978,3.412ZM29.959,33.331,25.771,22.61l4.085-4.086a1.555,1.555,0,0,0-2.2-2.2L23.479,20.5,13.061,16.433,40.414,5.976Zm-9.31-5.693L6.654,41.633a1.555,1.555,0,1,1-2.2-2.2L18.45,25.44a1.555,1.555,0,0,1,2.2,2.2Zm3.11,7.775-6.22,6.22a1.555,1.555,0,0,1-2.2-2.2l6.22-6.22a1.555,1.555,0,1,1,2.2,2.2Zm-19.3-4.665a1.553,1.553,0,0,1,0-2.2l6.22-6.22a1.555,1.555,0,1,1,2.2,2.2l-6.22,6.22a1.554,1.554,0,0,1-2.2,0Z" transform="translate(-4 -2.613)" fill="currentColor" stroke="currentColor" stroke-width="0.6"/></g>
</svg>
