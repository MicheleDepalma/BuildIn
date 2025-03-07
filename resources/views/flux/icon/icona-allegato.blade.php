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

<svg xmlns="http://www.w3.org/2000/svg" width="8.893" height="17.785" viewBox="0 0 8.893 17.785" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_material-attach-file" data-name="Icon material-attach-file" d="M18.18,5.542v9.3a3.234,3.234,0,0,1-6.467,0V4.734a2.021,2.021,0,1,1,4.042,0v8.488a.808.808,0,0,1-1.617,0V5.542H12.925v7.68a2.021,2.021,0,1,0,4.042,0V4.734a3.234,3.234,0,1,0-6.467,0V14.839a4.446,4.446,0,0,0,8.893,0v-9.3Z" transform="translate(-10.5 -1.5)" fill="currentColor"/>
</svg>
