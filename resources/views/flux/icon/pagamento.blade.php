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

<svg xmlns="http://www.w3.org/2000/svg" width="14.076" height="10.802" viewBox="0 0 14.076 10.802" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Raggruppa_3403" data-name="Raggruppa 3403"><path id="Tracciato_911" data-name="Tracciato 911" d="M15.326,5.55v7.2a1.8,1.8,0,0,1-1.8,1.8H3.05a1.8,1.8,0,0,1-1.8-1.8V5.55a1.8,1.8,0,0,1,1.8-1.8H13.525a1.8,1.8,0,0,1,1.8,1.8Zm-.982,0a.818.818,0,0,0-.818-.818H3.05a.818.818,0,0,0-.818.818v7.2a.818.818,0,0,0,.818.818H13.525a.818.818,0,0,0,.818-.818Z" transform="translate(-1.25 -3.75)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_912" data-name="Tracciato 912" d="M14.835,9.25a.491.491,0,1,1,0,.982H1.741a.491.491,0,0,1,0-.982Z" transform="translate(-1.25 -5.649)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_913" data-name="Tracciato 913" d="M6.05,15.25a.491.491,0,0,1,0,.982H4.741a.491.491,0,0,1,0-.982Z" transform="translate(-2.286 -7.721)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_914" data-name="Tracciato 914" d="M10.55,15.25a.491.491,0,0,1,0,.982H9.241a.491.491,0,0,1,0-.982Z" transform="translate(-3.84 -7.721)" fill="currentColor" fill-rule="evenodd"/></g>
</svg>
