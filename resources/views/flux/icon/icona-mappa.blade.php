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

<svg xmlns="http://www.w3.org/2000/svg" width="15.141" height="13.873" viewBox="0 0 15.141 13.873" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_mappa" data-name="icona mappa" transform="translate(0.6 0.6)"><path id="Tracciato_7677" data-name="Tracciato 7677" d="M1,3.535V13.673l4.436-2.535L10.5,13.673l4.436-2.535V1L10.5,3.535,5.436,1ZM5.436,1V11.138m5.069-7.6V13.673" transform="translate(-1 -1)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" fill-rule="evenodd"/></g>
</svg>
