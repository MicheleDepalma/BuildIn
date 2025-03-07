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

<svg xmlns="http://www.w3.org/2000/svg" width="11.324" height="6.475" viewBox="0 0 11.324 6.475" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ion-ios-arrow-down" data-name="Icon ion-ios-arrow-down" d="M11.852,15.769l4.282-4.285a.806.806,0,0,1,1.143,0,.816.816,0,0,1,0,1.146l-4.852,4.855a.808.808,0,0,1-1.116.024L6.424,12.634a.809.809,0,0,1,1.143-1.146Z" transform="translate(-6.188 -11.246)" fill="currentColor"/>
</svg>
