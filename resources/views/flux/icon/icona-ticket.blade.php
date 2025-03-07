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

<svg xmlns="http://www.w3.org/2000/svg" width="11.119" height="14.84" viewBox="0 0 11.119 14.84" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_ticket" data-name="icona ticket" transform="translate(0.1 0.1)"><path id="Tracciato_7659" data-name="Tracciato 7659" d="M14.768,2H13.5A2.336,2.336,0,0,0,11.26,4.42V14.84a1.737,1.737,0,0,0,1.661,1.8h1.838a.441.441,0,0,0,.423-.457,1.542,1.542,0,1,1,3.075,0,.441.441,0,0,0,.423.457h1.838a1.737,1.737,0,0,0,1.661-1.8V4.42A2.336,2.336,0,0,0,19.942,2H18.689a.441.441,0,0,0-.423.457V2.48a1.543,1.543,0,1,1-3.076,0V2.457A.441.441,0,0,0,14.768,2Zm1.96,3.059a2.449,2.449,0,0,0,2.348-2.144h.867A1.453,1.453,0,0,1,21.333,4.42V11.7h-1.84a.459.459,0,0,0,0,.915h1.84V14.84a.853.853,0,0,1-.816.884H19.063a2.355,2.355,0,0,0-4.687,0H12.921a.853.853,0,0,1-.816-.884V12.616h1.84a.459.459,0,0,0,0-.915h-1.84V4.42A1.453,1.453,0,0,1,13.5,2.915h.885a2.449,2.449,0,0,0,2.347,2.144Z" transform="translate(-11.26 -2)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/><path id="Tracciato_7660" data-name="Tracciato 7660" d="M39.329,66.335H41.25a.359.359,0,1,0,0-.718H39.329a.359.359,0,0,0,0,.718Z" transform="translate(-34.83 -55.779)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/></g>
</svg>
