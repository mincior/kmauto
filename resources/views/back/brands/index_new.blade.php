@extends('layouts.back')

@section('title')
    &vert; Luni
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6">
        @include('back.brands.index_component')
    </div>

    <div class="col-sm-6">
        @include('back.types.index_component')
    </div>
</div>
@endsection

@section('scripts')
    @parent

    @include('back.components.datatables-js')

    <script type="text/javascript">
    </script>
@endsection

@section('styles')
    @parent

    @include('back.components.datatables-css')
@endsection
