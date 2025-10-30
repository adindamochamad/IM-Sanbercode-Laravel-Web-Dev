@extends('layouts.master')

@section('title', 'Halaman Utama')
@section('content')
    <h1>SELAMAT DATANG {{ strtoupper($firstName) }} {{ strtoupper($lastName) }}!</h1>
    <p><strong>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</strong></p>

@endsection
