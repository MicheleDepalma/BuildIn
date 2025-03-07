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

<svg xmlns="http://www.w3.org/2000/svg" width="13.08" height="13.08" viewBox="0 0 13.08 13.08" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_plus" data-name="Icona plus" transform="translate(0.75 0.75)"><path id="Icon_akar-plus" data-name="Icon akar-plus" d="M11.79,17.58V11.79m0,0V6m0,5.79h5.79m-5.79,0H6" transform="translate(-6 -6)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"/></g>
</svg>
