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

<svg xmlns="http://www.w3.org/2000/svg" width="14.643" height="14.705" viewBox="0 0 14.643 14.705" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_i_miei_annunci" data-name="icona i miei annunci" transform="translate(0.109 0.13)"><path id="Tracciato_917" data-name="Tracciato 917" d="M9.519,14.994l1.013,2.171a.854.854,0,0,0,.069.12l1.17,1.7a.5.5,0,0,1-.337.784l-2.073.33a1.178,1.178,0,0,1-1.253-.665L6.657,16.328a.5.5,0,0,1,.244-.67l1.948-.908A.5.5,0,0,1,9.519,14.994Zm-.7.883-1.033.482,1.237,2.653a.168.168,0,0,0,.179.1l1.285-.205-.718-1.046a1.8,1.8,0,0,1-.151-.264Z" transform="translate(-3.02 -5.65)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_918" data-name="Tracciato 918" d="M1.592,10.39a3.369,3.369,0,0,1,1.63-4.478L5.73,4.742A4.5,4.5,0,0,0,6.925,3.93L9.263,1.716a.863.863,0,0,1,1.375.262L13.85,8.867a.863.863,0,0,1-.683,1.222l-3.2.368a4.528,4.528,0,0,0-1.39.393L6.07,12.02a3.37,3.37,0,0,1-4.479-1.63ZM12.85,9.11,9.809,2.589,7.618,4.662a5.524,5.524,0,0,1-1.461.994L3.649,6.826a2.36,2.36,0,1,0,2,4.279L8.152,9.935a5.516,5.516,0,0,1,1.7-.481Z" transform="translate(-1.276 -1.324)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_919" data-name="Tracciato 919" d="M20.789,4.7a.5.5,0,1,1,.427.914l-.974.454a.5.5,0,1,1-.427-.915Z" transform="translate(-7.246 -2.363)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_920" data-name="Tracciato 920" d="M17.444,2.935a.5.5,0,1,1-.874-.5l.537-.931a.5.5,0,0,1,.874.5Z" transform="translate(-6.258 -1.247)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_921" data-name="Tracciato 921" d="M20.068,10.385a.5.5,0,0,1,.176-.994l1.058.187a.5.5,0,1,1-.175.994Z" transform="translate(-7.287 -3.908)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/></g>
</svg>
