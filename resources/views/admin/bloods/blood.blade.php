@extends('layouts.layout')

@section('content')
<div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Blood Group</th>
            </tr>
        </thead>
        <?php $list=bloodGroups(); ?>
        <tbode>
            @foreach($list as $value)
            <tr>
                <td>{{$value}}</td>
            </tr>
            @endforeach
        </tbode>
    </table>
</div>

@endsection