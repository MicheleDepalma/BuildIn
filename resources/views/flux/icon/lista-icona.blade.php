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

<svg xmlns="http://www.w3.org/2000/svg" width="16.084" height="13.326" viewBox="0 0 16.084 13.326" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="lista_icona" data-name="lista icona" transform="translate(0.199 0.2)"><path id="XMLID_1186_" d="M15.883,9.62a1.037,1.037,0,0,1-1.034,1.034h-9.5a1.034,1.034,0,0,1,0-2.068h9.5A1.037,1.037,0,0,1,15.883,9.62ZM5.353,16h5.394a1.034,1.034,0,0,0,0-2.068H5.353a1.034,1.034,0,0,0,0,2.068Zm7.618,3.275H5.353a1.034,1.034,0,1,0,0,2.068h7.618A1.037,1.037,0,0,0,14,20.306,1.026,1.026,0,0,0,12.971,19.271ZM1.337,8.5a1.137,1.137,0,0,0-.793.327A1.154,1.154,0,0,0,.2,9.62a1.118,1.118,0,0,0,1.12,1.12,1.121,1.121,0,0,0,.793-1.913A1.067,1.067,0,0,0,1.337,8.5Zm0,5.343a1.137,1.137,0,0,0-.793.327,1.154,1.154,0,0,0-.345.793,1.118,1.118,0,0,0,1.12,1.12,1.121,1.121,0,0,0,.793-1.913A1.067,1.067,0,0,0,1.337,13.843Zm0,5.343a1.137,1.137,0,0,0-.793.327,1.154,1.154,0,0,0-.345.793,1.118,1.118,0,0,0,1.12,1.12,1.121,1.121,0,0,0,.793-1.913A1.067,1.067,0,0,0,1.337,19.185Z" transform="translate(-0.2 -8.5)" fill="currentColor" stroke="currentColor" stroke-width="0.4"/></g>
</svg>
