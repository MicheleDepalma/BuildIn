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

<svg xmlns="http://www.w3.org/2000/svg" width="23.029" height="17.405" viewBox="0 0 23.029 17.405" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="burger_menu" data-name="burger menu" transform="translate(1 1)"><path id="Tracciato_7667" data-name="Tracciato 7667" d="M21,40.825H42.029M21,48.405H42.029M21,33H42.029" transform="translate(-21 -33)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"/></g>
</svg>
