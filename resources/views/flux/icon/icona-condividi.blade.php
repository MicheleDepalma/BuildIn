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

<svg xmlns="http://www.w3.org/2000/svg" width="13.619" height="13.625" viewBox="0 0 13.619 13.625" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_condividi" data-name="icona condividi" transform="translate(0.199 0.203)"><path id="Tracciato_614" data-name="Tracciato 614" d="M21.174,10l-4.306,3.823h0a.543.543,0,0,1-.883-.486V12.12c-3.369.052-5.986,2.36-7,5.839a.406.406,0,0,1-.8-.1h0C8.039,13.2,9.375,10.5,11.1,8.934a8.69,8.69,0,0,1,4.883-2.082A8.306,8.306,0,0,1,16.03,5.4a.516.516,0,0,1,.836-.239L21.2,9.008h0a.678.678,0,0,1-.023.992ZM16.8,12.8l3.721-3.3L16.8,6.19V7.219a.407.407,0,0,1-.372.406c-4.155.362-6.939,2.846-7.374,8.024a8.5,8.5,0,0,1,2.221-2.678,7.779,7.779,0,0,1,5.1-1.659.406.406,0,0,1,.425.407V12.8Z" transform="translate(-8.182 -5.031)" fill="currentColor" stroke="currentColor" stroke-width="0.4" fill-rule="evenodd"/></g>
</svg>
