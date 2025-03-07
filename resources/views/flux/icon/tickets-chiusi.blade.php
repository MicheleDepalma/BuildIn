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

<svg xmlns="http://www.w3.org/2000/svg" width="17.357" height="16.689" viewBox="0 0 17.357 16.689" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="tickets_chiusi" data-name="tickets chiusi" transform="translate(0.75 1.061)"><path id="Tracciato_7684" data-name="Tracciato 7684" d="M7,8.22l2.707,2.707L19.634,1" transform="translate(-4.088 -1)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/><path id="Tracciato_7685" data-name="Tracciato 7685" d="M14.741,8.439v5.786a1.594,1.594,0,0,1-1.527,1.653H2.527A1.594,1.594,0,0,1,1,14.226V2.653A1.594,1.594,0,0,1,2.527,1h8.4" transform="translate(-1 -1)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/></g>
</svg>
