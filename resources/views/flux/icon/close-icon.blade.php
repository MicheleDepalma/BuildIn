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

<svg xmlns="http://www.w3.org/2000/svg" width="18.811" height="18.813" viewBox="0 0 18.811 18.813" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="close_icon" data-name="close icon" transform="translate(1.555 1.556)"><path id="Icon_ion-close-outline" data-name="Icon ion-close-outline" d="M25.826,25.826l-15.7-15.7m15.7,0-15.7,15.7" transform="translate(-10.125 -10.125)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"/></g>
</svg>
