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

<svg xmlns="http://www.w3.org/2000/svg" width="17.006" height="23.809" viewBox="0 0 17.006 23.809" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ion-md-pin" data-name="Icon ion-md-pin" d="M15.253,2.25a8.444,8.444,0,0,0-8.5,8.333c0,6.25,8.5,15.476,8.5,15.476s8.5-9.226,8.5-15.476A8.444,8.444,0,0,0,15.253,2.25Zm0,11.309a2.977,2.977,0,1,1,3.037-2.976A2.978,2.978,0,0,1,15.253,13.559Z" transform="translate(-6.75 -2.25)" fill="currentColor"/><ellipse id="Ellisse_112" data-name="Ellisse 112" cx="3.779" cy="3.779" rx="3.779" ry="3.779" transform="translate(4.535 4.535)" fill="currentColor"/>
</svg>
