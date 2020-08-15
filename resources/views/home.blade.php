@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <!-- Full Page Image Header with Vertically Centered Content -->
                <header class="masthead">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light">Welcome Member</h1>
                        <p class="lead">This is page to access member list and project list</p>
                    </div>
                    </div>
                </div>
                </header>

                <!-- Page Content -->

                <section class="py-5">
                <div class="container">
                    <h2 class="font-weight-light">Page Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit expedita.</p>
                </div>
                </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
