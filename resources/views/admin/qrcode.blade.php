@extends('admin.admin')
@section('content')
<div class="visible-print text-center">
    <h1>Coba QrCode Tiket</h1>
       {!! QrCode::size(250)->generate('shendy coba'); !!}
    <p>Tiket Event</p>
        

</div>
    
         
@endsection
