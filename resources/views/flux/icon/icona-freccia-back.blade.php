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

<svg xmlns="http://www.w3.org/2000/svg" width="9.521" height="16.653" viewBox="0 0 9.521 16.653" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ion-ios-arrow-down" data-name="Icon ion-ios-arrow-down" d="M8.33,2.87l6.3,6.3a1.185,1.185,0,0,0,1.681,0,1.2,1.2,0,0,0,0-1.686L9.173.347A1.188,1.188,0,0,0,7.531.312L.347,7.481A1.19,1.19,0,0,0,2.028,9.167Z" transform="translate(0 16.653) rotate(-90)" fill="currentColor"/>
</svg>
