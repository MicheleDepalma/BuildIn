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

<svg xmlns="http://www.w3.org/2000/svg" width="14.68" height="14.552" viewBox="0 0 14.68 14.552" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_risposte" data-name="icona risposte" transform="translate(0.277 0.25)"><path id="Tracciato_167" data-name="Tracciato 167" d="M11.662,21.494a.266.266,0,0,0,.242,0,.309.309,0,0,0,.1-.081l1.469-1.745a.426.426,0,0,0,0-.529.281.281,0,0,0-.445,0L12.1,20.247V18.1a2.5,2.5,0,0,1,2.255-2.68h5.141A2.5,2.5,0,0,1,21.75,18.1a.319.319,0,1,0,.629,0,3.2,3.2,0,0,0-2.885-3.428H14.354A3.2,3.2,0,0,0,11.469,18.1v2.152l-.932-1.107a.281.281,0,0,0-.445,0,.425.425,0,0,0,0,.529l1.469,1.745a.309.309,0,0,0,.1.081Z" transform="translate(-10 -14.667)" fill="currentColor" stroke="currentColor" stroke-width="0.5"/><path id="Tracciato_168" data-name="Tracciato 168" d="M26.954,32.858l-1.468-1.743a.31.31,0,0,0-.1-.082h0a.263.263,0,0,0-.238,0h0a.31.31,0,0,0-.1.082l-1.468,1.743a.426.426,0,0,0,0,.529.281.281,0,0,0,.445,0l.931-1.107V34.43a2.5,2.5,0,0,1-2.255,2.68H17.552A2.5,2.5,0,0,1,15.3,34.43a.319.319,0,1,0-.629,0,3.2,3.2,0,0,0,2.885,3.428h5.141a3.2,3.2,0,0,0,2.885-3.428V32.279l.932,1.107a.281.281,0,0,0,.445,0,.425.425,0,0,0,0-.529Z" transform="translate(-12.922 -23.807)" fill="currentColor" stroke="currentColor" stroke-width="0.5"/></g>
</svg>
