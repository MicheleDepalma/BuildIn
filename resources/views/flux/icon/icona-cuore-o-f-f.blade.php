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

<svg xmlns="http://www.w3.org/2000/svg" width="16.031" height="13.924" viewBox="0 0 16.031 13.924" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_cuore_OFF" data-name="icona cuore OFF" transform="translate(0.252 0.005)"><path id="Tracciato_898" data-name="Tracciato 898" d="M15.116,967.4a4.033,4.033,0,0,0-2.929,1.256,4.406,4.406,0,0,0,0,6.05l6.125,6.423a.6.6,0,0,0,.864,0l6.131-6.417a4.4,4.4,0,0,0,0-6.05,4.035,4.035,0,0,0-5.857,0l-.7.727-.7-.734a4.033,4.033,0,0,0-2.929-1.256Zm0,1.169a2.861,2.861,0,0,1,2.071.914l1.132,1.188a.6.6,0,0,0,.864,0l1.125-1.181a2.8,2.8,0,0,1,4.135,0,3.215,3.215,0,0,1,0,4.4q-2.847,2.98-5.7,5.957l-5.7-5.963a3.215,3.215,0,0,1,0-4.4A2.848,2.848,0,0,1,15.116,968.566Z" transform="translate(-10.985 -967.397)" fill="currentColor" stroke="currentColor" stroke-width="0.01"/></g>
</svg>
