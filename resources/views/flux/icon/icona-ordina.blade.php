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

<svg xmlns="http://www.w3.org/2000/svg" width="11" height="10.782" viewBox="0 0 11 10.782" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_7678" data-name="Tracciato 7678" d="M6.668,5.443A.5.5,0,0,1,6.314,5.3l-1.48-1.48L3.353,5.3a.5.5,0,1,1-.707-.707L4.48,2.756a.5.5,0,0,1,.707,0L7.022,4.59a.5.5,0,0,1-.354.853Z" transform="translate(-2.5 -2.609)" fill="currentColor"/><path id="Tracciato_7679" data-name="Tracciato 7679" d="M4.834,13.391a.5.5,0,0,1-.5-.5V3.678a.5.5,0,0,1,1,0v9.213a.5.5,0,0,1-.5.5Zm6.332,0a.5.5,0,0,1-.354-.146L8.978,11.41a.5.5,0,1,1,.707-.707l1.48,1.48,1.481-1.48a.5.5,0,1,1,.707.707l-1.834,1.834a.5.5,0,0,1-.353.147Z" transform="translate(-2.5 -2.609)" fill="currentColor"/><path id="Tracciato_7680" data-name="Tracciato 7680" d="M11.166,12.822a.5.5,0,0,1-.5-.5V3.109a.5.5,0,0,1,1,0v9.213a.5.5,0,0,1-.5.5Z" transform="translate(-2.5 -2.609)" fill="currentColor"/>
</svg>
