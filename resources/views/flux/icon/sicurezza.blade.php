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

<svg xmlns="http://www.w3.org/2000/svg" width="11.348" height="13.942" viewBox="0 0 11.348 13.942" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Raggruppa_3404" data-name="Raggruppa 3404"><path id="Tracciato_915" data-name="Tracciato 915" d="M6.651,10.955a.392.392,0,0,1,0-.618.581.581,0,0,1,.728,0l2.04,1.732,3.758-3.19a.581.581,0,0,1,.728,0,.392.392,0,0,1,0,.618L9.784,13a.581.581,0,0,1-.728,0Z" transform="translate(-4.605 -3.624)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_916" data-name="Tracciato 916" d="M8.924,15.192A5.674,5.674,0,0,1,3.25,9.518V4.006a.486.486,0,0,1,.374-.473A11.223,11.223,0,0,0,8.615,1.36a.487.487,0,0,1,.617,0,11.223,11.223,0,0,0,4.991,2.172.486.486,0,0,1,.374.473V9.518A5.674,5.674,0,0,1,8.924,15.192Zm0-.973a4.7,4.7,0,0,0,4.7-4.7V4.39a11.9,11.9,0,0,1-4.7-2.034,11.9,11.9,0,0,1-4.7,2.034V9.518A4.7,4.7,0,0,0,8.924,14.219Z" transform="translate(-3.25 -1.25)" fill="currentColor" fill-rule="evenodd"/></g>
</svg>
