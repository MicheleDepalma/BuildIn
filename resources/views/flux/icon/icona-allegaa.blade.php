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

<svg xmlns="http://www.w3.org/2000/svg" width="10.994" height="17.392" viewBox="0 0 10.994 17.392" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_allegaa" data-name="icona allegaa" transform="translate(0.699 0.7)"><path id="Icon_akar-attach" data-name="Icon akar-attach" d="M9,7.726v6.469a4.8,4.8,0,0,0,4.8,4.8h0a4.8,4.8,0,0,0,4.8-4.8v-8A3.2,3.2,0,0,0,15.4,3h0a3.2,3.2,0,0,0-3.2,3.2v7.342a1.6,1.6,0,0,0,1.6,1.6h0a1.6,1.6,0,0,0,1.6-1.6V7.8" transform="translate(-9 -3)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"/></g>
</svg>
