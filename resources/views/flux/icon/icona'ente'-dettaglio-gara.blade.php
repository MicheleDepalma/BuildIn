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

<svg xmlns="http://www.w3.org/2000/svg" width="24.365" height="25.012" viewBox="0 0 24.365 25.012" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_ente_dettaglio_gara" data-name="icona 'ente' dettaglio gara" transform="translate(0.199 0.203)"><path id="Tracciato_7656" data-name="Tracciato 7656" d="M9.746,12.716H7.159v2.169H29.405V12.716Zm8.937-9.353a8.959,8.959,0,0,1,8.55,8.55h2.574a.4.4,0,0,1,.4.4v2.971a.4.4,0,0,1-.4.4h-1.02V27.016h1.02a.4.4,0,0,1,.4.4v.526H6.357v-.526a.4.4,0,0,1,.4-.4H7.779V15.687H6.758a.4.4,0,0,1-.4-.4V12.315a.4.4,0,0,1,.4-.4H9.33a8.962,8.962,0,0,1,8.551-8.55A3.212,3.212,0,0,1,18.684,3.363Zm.548,23.649V20.538c0-1.253,2.125-2.783,3.378-2.783s3.356,1.53,3.356,2.783v6.476l2.019,0V15.687H8.581V27.016l2.138,0V20.538c0-1.253,2.062-2.783,3.315-2.783s3.255,1.53,3.255,2.783v6.476C23.416,27.014,13.491,27.012,19.231,27.012Zm5.93,0V20.538c0-.809-1.743-1.979-2.553-1.979s-2.575,1.17-2.575,1.979v6.476Zm-8.677,0V20.538c0-.809-1.643-1.979-2.452-1.979s-2.511,1.17-2.511,1.979v6.476Zm9.948-15.1a8.159,8.159,0,0,0-16.3,0Z" transform="translate(-6.3 -3.335)" fill="currentColor" stroke="currentColor" stroke-width="0.4" fill-rule="evenodd"/></g>
</svg>
