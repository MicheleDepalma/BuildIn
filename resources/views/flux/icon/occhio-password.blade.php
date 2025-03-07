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

<svg xmlns="http://www.w3.org/2000/svg" width="14.318" height="10.74" viewBox="0 0 14.318 10.74" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="occhio_password" data-name="occhio password" transform="translate(0.6 0.6)"><path id="Tracciato_7641" data-name="Tracciato 7641" d="M1.5,10.77S3.885,6,8.059,6s6.559,4.77,6.559,4.77-2.385,4.77-6.559,4.77S1.5,10.77,1.5,10.77Z" transform="translate(-1.5 -6)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/><path id="Tracciato_7642" data-name="Tracciato 7642" d="M17.078,15.289A1.789,1.789,0,1,1,15.289,13.5,1.789,1.789,0,0,1,17.078,15.289Z" transform="translate(-8.73 -10.518)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/></g>
</svg>
