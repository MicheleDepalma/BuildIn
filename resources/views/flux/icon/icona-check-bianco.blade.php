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

<svg xmlns="http://www.w3.org/2000/svg" width="8.889" height="6.44" viewBox="0 0 8.889 6.44" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_check_bianco" data-name="Icona check bianco" transform="translate(0.99 0.99)"><path id="Icon_feather-check" data-name="Icon feather-check" d="M12.909,9l-4.75,4.75L6,11.591" transform="translate(-6 -9)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"/></g>
</svg>
