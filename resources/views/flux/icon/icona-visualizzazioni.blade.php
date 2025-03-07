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

<svg xmlns="http://www.w3.org/2000/svg" width="14" height="9.438" viewBox="0 0 14 9.438" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ion-md-eye" data-name="Icon ion-md-eye" d="M9.25,7.383a7.527,7.527,0,0,0-7,4.719,7.551,7.551,0,0,0,14,0A7.527,7.527,0,0,0,9.25,7.383Zm0,7.866A3.147,3.147,0,1,1,12.431,12.1,3.173,3.173,0,0,1,9.25,15.248Zm0-5.034A1.888,1.888,0,1,0,11.159,12.1,1.9,1.9,0,0,0,9.25,10.214Z" transform="translate(-2.25 -7.383)" fill="currentColor"/>
</svg>
