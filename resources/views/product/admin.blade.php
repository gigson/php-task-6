@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('storeProduct') }}" method="post">
                    @csrf
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title"><br>

                    <label for="description">Description:</label><br>
                    <input type="text" id="description" name="description"><br>

                    <input type="submit" value="Add">
                </form>


                <div style="margin-top: 25px">
                    <h1>Listings:</h1>
                    @foreach($products as $product)

                        <div>
                            <form action="{{ route('updateProduct') }}" method="post">
                                @csrf
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" value="{{$product->title}}">

                                <label for="description">Description:</label>
                                <input type="text" id="description" name="description"
                                       value="{{$product->description}}">

                                <input type="text" id="id" name="id" value="{{$product->id}}" hidden>

                                @if(Auth::user()->id  == $product->user_id)
                                    <input type="submit" value="Update">
                                @endif
                            </form>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
@endsection
