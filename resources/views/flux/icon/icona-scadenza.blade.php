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

<svg xmlns="http://www.w3.org/2000/svg" width="11.396" height="12.542" viewBox="0 0 11.396 12.542" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_scadenza" data-name="Icona scadenza" transform="translate(0.551 0.55)"><path id="Tracciato_7658" data-name="Tracciato 7658" d="M5.644,6h8.008A1.131,1.131,0,0,1,14.8,7.117v7.817a1.131,1.131,0,0,1-1.144,1.117H5.644A1.131,1.131,0,0,1,4.5,14.934V7.117A1.131,1.131,0,0,1,5.644,6Z" transform="translate(-4.5 -4.609)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"/><path id="Tracciato_7659" data-name="Tracciato 7659" d="M11.936,3V5.778M7.36,3V5.778M4.5,8.556H14.8" transform="translate(-4.5 -3)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"/></g>
</svg>
