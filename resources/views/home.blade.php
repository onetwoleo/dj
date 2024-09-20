@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Уведомление') }}</div>

                <div class="card-body">
                    <div class="">
                        {{ __('Вы успешно вошли.') }}
                    </div>


                        <a href="@if(auth()->user()->is_admin){{route('admin')}}@else {{url('/')}}@endif">
                            <button class="float-right btn btn-success btn-lg">Продолжить</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
