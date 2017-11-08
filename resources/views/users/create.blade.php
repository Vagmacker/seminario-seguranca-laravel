@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>New User</h3>
        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => 'users.store', 'class'=>'form']) !!}
            <div class="form-group">
                {!! Form::label('Name', 'Name:') !!}
                {!! Form::text('user[name]', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Email', 'Email:') !!}
                {!! Form::text('user[email]', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection