<?php
/**
 * Created by PhpStorm.
 * User: lcom148-two
 * Date: 2/16/2018
 * Time: 12:44 PM
 */
?>

@extends('master')

@section('content')
    <div class="container">
        <h2>Stacked form</h2>
        @if(count($errors)> 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(\Session::has('sucess'))
            <div class="alert alert-success">
                <p>{{\Session::get('sucess')}}</p>
            </div>
        @endif
        <form action="{{url('student')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="fname">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="lname">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


