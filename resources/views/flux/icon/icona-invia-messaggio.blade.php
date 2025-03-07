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

<svg xmlns="http://www.w3.org/2000/svg" width="25.311" height="25.172" viewBox="0 0 25.311 25.172" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="noun-send-6908093" transform="translate(-19.3 5.827) rotate(-34)"><path id="Tracciato_7677" data-name="Tracciato 7677" d="M30.758,21.583l-13.614-6.8a2.513,2.513,0,0,0-2.839.395,2.417,2.417,0,0,0-.632,2.721l2.2,5.576-2.2,5.576A2.417,2.417,0,0,0,14.3,31.77a2.513,2.513,0,0,0,2.84.395l13.613-6.8a2.108,2.108,0,0,0,0-3.781Zm-.565,2.651-13.613,6.8a1.244,1.244,0,0,1-1.422-.2,1.166,1.166,0,0,1-.311-1.327l2.132-5.409h6.585a.631.631,0,1,0,0-1.263H16.979l-2.132-5.409a1.164,1.164,0,0,1,.311-1.327,1.241,1.241,0,0,1,1.423-.2l13.613,6.8a.845.845,0,0,1,0,1.521Z" transform="translate(0 0)" fill="currentColor"/></g>
</svg>
