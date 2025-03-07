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

<svg xmlns="http://www.w3.org/2000/svg" width="18.023" height="12.181" viewBox="0 0 18.023 12.181" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_dimensioni" data-name="icona dimensioni" transform="translate(0.1 0.1)"><g id="Raggruppa_37" data-name="Raggruppa 37"><path id="Tracciato_909" data-name="Tracciato 909" d="M29.744,45.812H12.632a.354.354,0,0,0-.354.354v6.271a.354.354,0,0,0,.354.354H29.743a.354.354,0,0,0,.354-.354V46.166a.354.354,0,0,0-.354-.354Zm-.354,6.271h-16.4V46.521H15.13V49.3a.354.354,0,1,0,.709,0V46.521h2.143V49.3a.354.354,0,1,0,.709,0V46.521h2.143V49.3a.354.354,0,1,0,.709,0V46.521h2.143V49.3a.354.354,0,1,0,.709,0V46.521h2.143V49.3a.354.354,0,1,0,.709,0V46.521H29.39Z" transform="translate(-12.278 -40.811)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/><path id="Tracciato_910" data-name="Tracciato 910" d="M13.812,28.1a.355.355,0,1,0,.5-.5l-.79-.79h15.33l-.79.79a.355.355,0,0,0,.5.5L30,26.674a.354.354,0,0,0,0-.5l-1.43-1.43a.354.354,0,0,0-.5.5l.861.861H13.452l.861-.861a.354.354,0,0,0-.5-.5l-1.43,1.43a.354.354,0,0,0,0,.5Z" transform="translate(-12.278 -24.639)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/></g></g>
</svg>
