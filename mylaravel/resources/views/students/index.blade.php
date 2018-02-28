<?php
/**
 * Created by PhpStorm.
 * User: lcom148-two
 * Date: 2/16/2018
 * Time: 3:03 PM
 */
?>

@extends('master')

@section('display')
<table class="table table-responsive-sm " >
    <tr class="table-dark">
        <th >Fname</th>
        <th>Lname</th>
    </tr>
    @foreach($students as $data)
        <tr>
            <td>{{$data['fname']}}</td>
            <td>{{$data['lname']}}</td>
        </tr>
    @endforeach
</table>
@endsection


/*

*/