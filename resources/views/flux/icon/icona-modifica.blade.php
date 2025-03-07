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

<svg xmlns="http://www.w3.org/2000/svg" width="15.359" height="15.177" viewBox="0 0 15.359 15.177" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_modifica" data-name="Icona modifica" transform="translate(0.057 0.05)"><path id="Icon_core-pencil" data-name="Icon core-pencil" d="M1.8,15.967l0,0a.791.791,0,0,0,.561.234.8.8,0,0,0,.258-.043l4.52-1.533,8.674-8.674a2.828,2.828,0,1,0-4-4L3.145,10.628l-1.533,4.52a.791.791,0,0,0,.191.818ZM12.539,2.675A1.809,1.809,0,1,1,15.1,5.233L13.957,6.374,11.4,3.815ZM4.034,11.18l6.645-6.645,2.558,2.558L6.592,13.739,2.72,15.052Z" transform="translate(-1.569 -1.126)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/></g>
</svg>
