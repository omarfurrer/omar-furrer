@extends('layouts.main')

@section('content')
<div id="about" class="container-fluid">

</div>
@endsection

@push('scripts')
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('about', 'js/config/particles.json', function () {
        console.log('callback - particles.js config loaded');
    });
</script>
@endpush
