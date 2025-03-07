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

<svg xmlns="http://www.w3.org/2000/svg" width="15.725" height="14.685" viewBox="0 0 15.725 14.685" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="contratti" transform="translate(0.148 0.158)"><g id="Raggruppa_3524" data-name="Raggruppa 3524" transform="translate(-0.794 -1.278)"><path id="Tracciato_953" data-name="Tracciato 953" d="M8.551,1.278h-6.5A1.262,1.262,0,0,0,.794,2.539V14.4a1.262,1.262,0,0,0,1.258,1.26h8.814a1.262,1.262,0,0,0,1.258-1.26v-1.82a.265.265,0,0,0-.53,0V14.4a.722.722,0,0,1-.728.731H2.052a.723.723,0,0,1-.729-.731V2.539a.723.723,0,0,1,.729-.731H8.286V3.863a1.262,1.262,0,0,0,1.258,1.26h2.05V5.8a.265.265,0,1,0,.53,0V4.859a.264.264,0,0,0,0-.027s0-.009,0-.014l0-.013,0-.014,0-.013a.265.265,0,0,0-.009-.025h0l-.006-.012-.006-.012-.007-.012L12.069,4.7h0l-.021-.024L8.739,1.357a.265.265,0,0,0-.049-.038L8.673,1.31a.265.265,0,0,0-.048-.02l-.01,0a.265.265,0,0,0-.065-.009Zm.264.9,2.4,2.411H9.543a.723.723,0,0,1-.729-.731Zm6.1,2.725a1.077,1.077,0,0,0-.749.315L12.705,6.687l-.011.014L9.661,9.737a.265.265,0,0,0-.061.1l-.738,2.024a.265.265,0,0,0,.338.34l2.021-.74a.265.265,0,0,0,.1-.06L14.36,8.348l0,0L15.826,6.88a1.149,1.149,0,0,0-.041-1.617,1.2,1.2,0,0,0-.81-.355H14.92Zm.017.525a.664.664,0,0,1,.476.2.611.611,0,0,1,.039.869l-.383.384-.908-.908.385-.386a.558.558,0,0,1,.391-.163Zm-11.068.9a.265.265,0,1,0,0,.53H9.051a.265.265,0,0,0,0-.53Zm9.918.02.907.909L11.6,10.359,10.7,9.45l2.381-2.384,0,0Zm-9.918,1.9a.265.265,0,1,0,0,.53H9.051a.265.265,0,0,0,0-.53Zm6.454,1.567.907.911-.245.245L9.553,11.5l.523-1.433Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" fill-rule="evenodd"/></g></g>
</svg>
