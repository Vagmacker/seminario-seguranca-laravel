@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit User</h3>
        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        {!! Form::model($user, ['route' => ['users.update', $user->id, 'class'=>'form']]) !!}
        <div class="form-group">
            {!! Form::label('Name', 'Name:') !!}
            {!! Form::text('user[name]', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Email', 'Email:') !!}
            {!! Form::text('user[email]', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection