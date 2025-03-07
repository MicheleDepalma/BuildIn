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

<svg xmlns="http://www.w3.org/2000/svg" width="14.814" height="14.815" viewBox="0 0 14.814 14.815" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="occhio_password_-_non_visibile" data-name="occhio password - non visibile" transform="translate(0.848 0.849)"><path id="Icon_feather-eye-off" data-name="Icon feather-eye-off" d="M11.6,11.6a6,6,0,0,1-3.542,1.228c-4.174,0-6.559-4.77-6.559-4.77A11,11,0,0,1,4.517,4.517m2.29-1.085a5.438,5.438,0,0,1,1.252-.143c4.174,0,6.559,4.77,6.559,4.77a11.031,11.031,0,0,1-1.288,1.9M9.323,9.323A1.789,1.789,0,1,1,6.795,6.795M1.5,1.5,14.618,14.618" transform="translate(-1.5 -1.5)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/></g>
</svg>
