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

<svg xmlns="http://www.w3.org/2000/svg" width="15.381" height="14.354" viewBox="0 0 15.381 14.354" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_7676" data-name="Tracciato 7676" d="M1.513,4.564h.073a2.041,2.041,0,0,0,3.956,0H15.868a.513.513,0,0,0,0-1.025H5.541a2.041,2.041,0,0,0-3.956,0H1.513a.513.513,0,1,0,0,1.025ZM3.563,3.026A1.025,1.025,0,1,1,2.538,4.051,1.025,1.025,0,0,1,3.563,3.026Zm12.3,5.64H15.8a2.041,2.041,0,0,0-3.956,0H1.513a.513.513,0,0,0,0,1.025H11.839a2.041,2.041,0,0,0,3.956,0h.073a.513.513,0,0,0,0-1.025ZM13.817,10.2a1.025,1.025,0,1,1,1.025-1.025A1.025,1.025,0,0,1,13.817,10.2Zm2.051,3.589h-5.2a2.041,2.041,0,0,0-3.956,0h-5.2a.513.513,0,1,0,0,1.025h5.2a2.041,2.041,0,0,0,3.956,0h5.2a.513.513,0,0,0,0-1.025ZM8.69,15.331a1.025,1.025,0,1,1,1.025-1.025A1.025,1.025,0,0,1,8.69,15.331Z" transform="translate(-1 -2.001)" fill="currentColor"/>
</svg>
