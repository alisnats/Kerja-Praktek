@extends('layouts.index')
@section('test')
    <div class="main">
        <nav class="navbar navbar-expand px-3 border-bottom">
            <!-- Button for sidebar toggle -->
            <button class="btn" type="button" data-bs-theme="light">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        @include ('isian')
        @include('datepicker')
        {{-- @include('datepicker2') --}}
    </div>
@endsection
