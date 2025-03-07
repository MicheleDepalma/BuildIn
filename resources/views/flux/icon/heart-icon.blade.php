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

<svg xmlns="http://www.w3.org/2000/svg" width="20.133" height="18.075" viewBox="0 0 20.133 18.075" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="heart_icon" data-name="heart icon" transform="translate(0.148 0.15)"><path id="Tracciato_898" data-name="Tracciato 898" d="M16.263,967.4a5.152,5.152,0,0,0-3.741,1.6,5.629,5.629,0,0,0,0,7.729l7.824,8.205a.763.763,0,0,0,1.1,0l7.832-8.2a5.626,5.626,0,0,0,0-7.729,5.155,5.155,0,0,0-7.483,0l-.9.93L20,969a5.153,5.153,0,0,0-3.741-1.6Zm0,1.493a3.656,3.656,0,0,1,2.645,1.168l1.446,1.517a.763.763,0,0,0,1.1,0l1.438-1.509a3.575,3.575,0,0,1,5.282,0,4.107,4.107,0,0,1,0,5.624Q24.54,979.5,20.9,983.3l-7.276-7.618a4.108,4.108,0,0,1,0-5.624A3.638,3.638,0,0,1,16.263,968.89Z" transform="translate(-10.985 -967.397)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/></g>
</svg>
