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

<svg xmlns="http://www.w3.org/2000/svg" width="13.246" height="16.255" viewBox="0 0 13.246 16.255" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_pin_viola_scuro" data-name="Icona pin viola scuro" transform="translate(0.301 0.3)"><path id="Tracciato_900" data-name="Tracciato 900" d="M24.312,19.593A3.312,3.312,0,1,0,21,16.282,3.314,3.314,0,0,0,24.312,19.593Zm0-6.021a2.71,2.71,0,1,1-2.71,2.71A2.714,2.714,0,0,1,24.312,13.572Z" transform="translate(-17.989 -9.969)" fill="currentColor" stroke="currentColor" stroke-width="0.6"/><path id="Tracciato_902" data-name="Tracciato 902" d="M17.178,18.619a.307.307,0,0,0,.289,0c.253-.138,6.178-3.45,6.178-9.3A6.322,6.322,0,1,0,11,9.322C11,15.169,16.925,18.481,17.178,18.619ZM17.322,3.6a5.725,5.725,0,0,1,5.72,5.72c0,4.995-4.817,8.138-5.72,8.683-.9-.545-5.72-3.682-5.72-8.683A5.725,5.725,0,0,1,17.322,3.6Z" transform="translate(-11 -3)" fill="currentColor" stroke="currentColor" stroke-width="0.6"/></g>
</svg>
