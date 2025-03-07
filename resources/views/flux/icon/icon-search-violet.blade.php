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

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="search" d="M22.671,21.094l-3.777-3.765a8.8,8.8,0,0,0,1.877-5.443,8.886,8.886,0,1,0-8.886,8.886,8.8,8.8,0,0,0,5.443-1.877l3.765,3.777a1.115,1.115,0,1,0,1.577-1.577ZM5.222,11.886a6.665,6.665,0,1,1,6.665,6.665,6.665,6.665,0,0,1-6.665-6.665Z" transform="translate(-3 -3)" fill="currentColor"/>
</svg>
