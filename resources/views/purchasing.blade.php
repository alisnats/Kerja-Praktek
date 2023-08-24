@extends ('layouts/index')
@section('test')

<div class="main">
    <nav class="navbar navbar-expand px-3 border-bottom">
            <!-- Button for sidebar toggle -->
            <button class="btn" type="button" data-bs-theme="light">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    <a href="{{ URL::PREVIOUS() }}"><p></p><i class="fa fa-arrow-left"></i> Back</a>
    <p>ini adalah purchasing</p>
</div>
@endsection