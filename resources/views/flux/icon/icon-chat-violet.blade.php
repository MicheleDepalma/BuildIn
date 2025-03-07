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

<svg xmlns="http://www.w3.org/2000/svg" width="18.24" height="18.201" viewBox="0 0 18.24 18.201" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icon_chat_violet" data-name="icon chat violet" transform="translate(0.115 0.1)"><path id="Tracciato_7660" data-name="Tracciato 7660" d="M11,2a9,9,0,0,0-9,9,8.9,8.9,0,0,0,2.034,5.7l-1.8,1.8A.878.878,0,0,0,2.9,20H11A9,9,0,0,0,11,2Zm0,16.2H5.066l.837-.837a.881.881,0,0,0,0-1.269A7.2,7.2,0,1,1,11,18.2Z" transform="translate(-1.973 -2)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/><g id="Raggruppa_18871" data-name="Raggruppa 18871" transform="translate(-1789.287 -32.1)"><g id="Ellisse_118" data-name="Ellisse 118" transform="translate(1800.4 40)" fill="currentColor" stroke="currentColor" stroke-width="1"><circle cx="1.1" cy="1.1" r="1.1" stroke="none"/><circle cx="1.1" cy="1.1" r="0.6" fill="none"/></g><g id="Ellisse_117" data-name="Ellisse 117" transform="translate(1797 40)" fill="currentColor" stroke="currentColor" stroke-width="1"><circle cx="1.1" cy="1.1" r="1.1" stroke="none"/><circle cx="1.1" cy="1.1" r="0.6" fill="none"/></g><g id="Ellisse_116" data-name="Ellisse 116" transform="translate(1794 40)" fill="currentColor" stroke="currentColor" stroke-width="1"><circle cx="1.1" cy="1.1" r="1.1" stroke="none"/><circle cx="1.1" cy="1.1" r="0.6" fill="none"/></g></g></g>
</svg>
