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

<svg xmlns="http://www.w3.org/2000/svg" width="31.133" height="31.962" viewBox="0 0 31.133 31.962" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_profilo_ente_pubblico" data-name="Icona profilo ente pubblico" transform="translate(0.199 0.204)"><path id="Tracciato_7656" data-name="Tracciato 7656" d="M10.719,15.365H7.4v2.781H35.93V15.365ZM22.181,3.371A11.488,11.488,0,0,1,33.144,14.335h3.3a.515.515,0,0,1,.515.515V18.66a.515.515,0,0,1-.515.515H35.137V33.7h1.308a.515.515,0,0,1,.515.515v.675H6.373v-.675a.515.515,0,0,1,.515-.515H8.2V19.174H6.887a.514.514,0,0,1-.515-.515V14.85a.514.514,0,0,1,.515-.515h3.3A11.493,11.493,0,0,1,21.151,3.371,4.119,4.119,0,0,1,22.181,3.371Zm.7,30.327V25.4c0-1.607,2.725-3.568,4.332-3.568s4.3,1.962,4.3,3.568v8.3l2.589,0V19.174H9.225V33.7l2.741,0V25.4c0-1.607,2.644-3.568,4.251-3.568s4.174,1.962,4.174,3.568v8.3C28.25,33.7,15.522,33.7,22.883,33.7Zm7.605,0V25.4c0-1.038-2.236-2.538-3.273-2.538s-3.3,1.5-3.3,2.538v8.3Zm-11.127,0V25.4c0-1.037-2.106-2.538-3.144-2.538S13,24.359,13,25.4v8.3ZM32.117,14.335a10.463,10.463,0,0,0-20.9,0Z" transform="translate(-6.3 -3.335)" fill="currentColor" stroke="currentColor" stroke-width="0.4" fill-rule="evenodd"/></g>
</svg>
