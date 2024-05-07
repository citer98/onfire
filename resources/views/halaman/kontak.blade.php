@extends('layout/aplikasi')

@section('konten')
        <h1>{{$judul}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatibus tempore assumenda reprehenderit 
           alias, enim iste impedit hic aliquid consequuntur, laborum earum? Iusto quibusdam, totam nesciunt corrupti 
           est officia nemo.
        </p>

        <p>
            <ul>
                <li>Email : {{$kontak['email']}}</li>
                <li>WA    : {{$kontak['WA']}}</li>
            </ul>
        </p>

@endsection