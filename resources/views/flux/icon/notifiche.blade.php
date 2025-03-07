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

<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="button_notifiche" data-name="button notifiche"><circle id="Ellisse_2" data-name="Ellisse 2" cx="20" cy="20" r="20" fill="currentColor" opacity="0.3"/><g id="icona_notifiche" data-name="icona notifiche" transform="translate(12.071 10.75)"><path id="Tracciato_71" data-name="Tracciato 71" d="M24.129,27.95a3.067,3.067,0,0,1-2.906-1.688,3.86,3.86,0,0,1-.324-.954H16.864a.664.664,0,0,1-.47-1.134,7.332,7.332,0,0,0,1.787-4.814,10.959,10.959,0,0,1,.985-5.182,5.015,5.015,0,0,1,4.3-2.721V10.114a.664.664,0,1,1,1.328,0v1.344a5.015,5.015,0,0,1,4.3,2.721,10.959,10.959,0,0,1,.985,5.182,7.248,7.248,0,0,0,1.787,4.814.664.664,0,0,1-.47,1.134H27.359a3.86,3.86,0,0,1-.324.954A3.067,3.067,0,0,1,24.129,27.95Zm-1.86-2.642a2.332,2.332,0,0,0,.16.393,1.738,1.738,0,0,0,1.7.92,1.738,1.738,0,0,0,1.7-.92,2.33,2.33,0,0,0,.16-.393Zm4.552-1.328h3.243a8.74,8.74,0,0,1-1.316-4.619c0-4.565-1.425-6.6-4.619-6.6S19.51,14.8,19.51,19.36a8.74,8.74,0,0,1-1.316,4.619h8.527A.679.679,0,0,1,26.821,23.98Z" transform="translate(-16.2 -9.45)" fill="currentColor"/></g></g><path id="Tracciato_22" data-name="Tracciato 22" d="M8,0A8,8,0,1,1,0,8,8,8,0,0,1,8,0Z" transform="translate(22 4)" fill="currentColor"/><text id="_7" data-name="7" transform="translate(33 16)" fill="currentColor" font-size="11" font-family="Realist-Medium, Realist" font-weight="500" letter-spacing="0.025em"><tspan x="-5.588" y="0">7</tspan></text>
</svg>
