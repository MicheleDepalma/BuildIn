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

<svg xmlns="http://www.w3.org/2000/svg" width="13.453" height="13.453" viewBox="0 0 13.453 13.453" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_683" data-name="Tracciato 683" d="M17.361,12.83l-.569-.585a.122.122,0,0,0-.091-.039h0a.117.117,0,0,0-.091.039L12.666,16.22,11.23,14.784a.125.125,0,0,0-.181,0l-.576.576a.129.129,0,0,0,0,.184l1.811,1.811a.573.573,0,0,0,.378.184.6.6,0,0,0,.375-.178h0l4.324-4.346A.138.138,0,0,0,17.361,12.83Z" transform="translate(-7.188 -8.145)" fill="currentColor"/><path id="Tracciato_684" data-name="Tracciato 684" d="M10.1,4.28a5.819,5.819,0,1,1-4.117,1.7A5.783,5.783,0,0,1,10.1,4.28m0-.905A6.727,6.727,0,1,0,16.828,10.1,6.726,6.726,0,0,0,10.1,3.375Z" transform="translate(-3.375 -3.375)" fill="currentColor"/>
</svg>
