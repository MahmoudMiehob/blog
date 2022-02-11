@extends("layouts.master")


@section('title')
    الملف الشخصي
@stop

@section('css')

@endsection

@section('title_page1')
Dashboard
@endsection

@section('title_page2')
myprofile
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('assets/img/default.jfif') }}" width="80%" height="70%" class="img-circle ml-4"
                alt="User Image">
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->number }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection




    @section('scripts')

    @endsection
