@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to my project') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This project is purely a CRUD practice, where we have to show, edit and delete items from de database, the categories will have a an option ID embedded with it,
                        so that we can select its category.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
