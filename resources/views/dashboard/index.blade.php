@extends('dashboard.layout.master')
@section('title','Users')
@section('content')

@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('#userTable').DataTable();
    });
</script>
@endsection
