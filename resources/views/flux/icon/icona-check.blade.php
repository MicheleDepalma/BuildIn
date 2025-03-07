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

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<rect id="Rettangolo_3724" data-name="Rettangolo 3724" width="16" height="16" fill="currentColor" opacity="0.3"/><path id="Icon_feather-check" data-name="Icon feather-check" d="M12.909,9l-4.75,4.75L6,11.591" transform="translate(-1.453 -3.375)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"/>
</svg>
