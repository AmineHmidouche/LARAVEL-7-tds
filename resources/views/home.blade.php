@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <h1 class="col-md-8">Upoad your profail picture</h1>
                    <div class="card-body">
                        
                 <x-alert>
                     <p> her is responsive to image upload . </p>
                     </x-alert>

                     <form action="/upload" method="POST" enctype="multipart/form-data">
                        
                         <input type="file" name="image" >
                         @csrf
                         <input type="submit" value="upload">
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
