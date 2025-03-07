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

<svg xmlns="http://www.w3.org/2000/svg" width="13.373" height="11.616" viewBox="0 0 13.373 11.616" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_preferiti" data-name="icona preferiti" transform="translate(0.211 0.005)"><path id="Tracciato_898" data-name="Tracciato 898" d="M14.431,967.4a3.364,3.364,0,0,0-2.443,1.048,3.675,3.675,0,0,0,0,5.046l5.109,5.358a.5.5,0,0,0,.721,0l5.114-5.352a3.673,3.673,0,0,0,0-5.046,3.366,3.366,0,0,0-4.886,0l-.586.607-.586-.612a3.364,3.364,0,0,0-2.443-1.048Z" transform="translate(-10.985 -967.397)" fill="currentColor" stroke="currentColor" stroke-width="0.01"/></g>
</svg>
