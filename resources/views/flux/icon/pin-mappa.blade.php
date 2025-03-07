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

<svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="31.5" viewBox="0 0 22.5 31.5" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ion-md-pin" data-name="Icon ion-md-pin" d="M18,2.25A11.172,11.172,0,0,0,6.75,13.275C6.75,21.544,18,33.75,18,33.75S29.25,21.544,29.25,13.275A11.172,11.172,0,0,0,18,2.25Zm0,14.963a3.938,3.938,0,1,1,4.018-3.938A3.94,3.94,0,0,1,18,17.213Z" transform="translate(-6.75 -2.25)" fill="currentColor"/><circle id="Ellisse_112" data-name="Ellisse 112" cx="5" cy="5" r="5" transform="translate(6 6)" fill="currentColor"/>
</svg>
