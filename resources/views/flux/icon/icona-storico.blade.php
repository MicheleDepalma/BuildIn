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

<svg xmlns="http://www.w3.org/2000/svg" width="15.049" height="14.926" viewBox="0 0 15.049 14.926" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_storico" data-name="icona storico" transform="translate(0.783 0.658)"><path id="Icon_akar-history" data-name="Icon akar-history" d="M5.457,14.377a6.748,6.748,0,0,0,2.961,3.008,6.584,6.584,0,0,0,4.137.629,6.651,6.651,0,0,0,3.7-2,6.9,6.9,0,0,0,1.016-8.023A6.733,6.733,0,0,0,14.19,5.11a6.579,6.579,0,0,0-4.159-.46A6.251,6.251,0,0,0,6.537,6.733,5.812,5.812,0,0,0,5.615,8.08m2.288.2-2.729.544L4.5,6.013m6.806,3.025v3.025l2.269,1.512" transform="translate(-4.5 -4.501)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/></g>
</svg>
