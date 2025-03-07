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

<svg xmlns="http://www.w3.org/2000/svg" width="12.254" height="12.254" viewBox="0 0 12.254 12.254" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="search" d="M15.053,14.086l-2.314-2.307a5.39,5.39,0,0,0,1.15-3.335,5.444,5.444,0,1,0-5.444,5.444,5.39,5.39,0,0,0,3.335-1.15l2.307,2.314a.683.683,0,1,0,.966-.966ZM4.361,8.444a4.083,4.083,0,1,1,4.083,4.083A4.083,4.083,0,0,1,4.361,8.444Z" transform="translate(-3 -3)" fill="currentColor"/>
</svg>
