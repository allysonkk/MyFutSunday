@extends('layouts.app')

@section('content')
    @guest
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Home</div>

                        <div class="card-body">
                            Welcome!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <router-view></router-view>
    @endguest
@endsection
