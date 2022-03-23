@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
    <p>Manufacturer Content Here</p>
    <div class="card">
        <div class="card-body">
            <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">Id#</th><th>Company Name</th><th>Sales Name</th><th>Sales Email</th><th>Tech Name</th><th>Tech Email</th><th style="width: 40px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manufacturers AS $manufacturer)
                    <tr>
                        <td>{{ $manufacturer->id }}</td>
                        <td>{{ $manufacturer->company_name }}</td>
                        <td>{{ $manufacturer->sales_name }}</td>
                        <td>{{ $manufacturer->sales_email }}</td>
                        <td>{{ $manufacturer->tech_name }}</td>
                        <td>{{ $manufacturer->tech_email }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop