@extends('layouts.app')

@section('content')

<section class="show-quote py-5">
@include("quotes._flashMessage")
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Quote Detail</h2>
                        <div class="ml-auto">
                            <a href="{{route('quote.edit', $quote->id)}}" class="btn button-main">Edit Quote</a>
                            <a href="{{route('quote.index')}}" class="btn btn-outline-secondary">Back to all Quotes</a>
                        </div>
                    </div>                  
                </div>
        
            <div class="card-body">
            <!-- starts with sm screen two cols on the page to show data -->
                <p class="text-center">Dot Number: &nbsp;{{$quote->dot_number}}</p>
                <p class="text-center">Premium Amount: &nbsp;{{$quote->premium_amount}}</p>
                <p class="text-center">Premium Tax: &nbsp; {{$quote->premium_tax}}</p>
                <p class="text-center">Premium Total: &nbsp;{{$quote->premium_total}}</p>
                <p class="text-center">Street: &nbsp;{{$quote->street}}</p>
                <p class="text-center">City: &nbsp;{{$quote->city}}</p>
                <p class="text-center">State: &nbsp;{{$quote->state}}</p>
                <p class="text-center">zipcode: &nbsp;{{$quote->zipcode}}</p>
                <p class="text-center">Driver1 Name:&nbsp;{{$quote->driver1_name}}</p>
                <p class="text-center">Driver1 Age:&nbsp;{{$quote->driver1_age}}</p>
                <p class="text-center">Driver2 Name:&nbsp;{{$quote->driver2_name}}</p>
                <p class="text-center">Driver2 Age:&nbsp;{{$quote->driver2_age}}</p>
                <p class="text-center">Driver3 Name:&nbsp;{{$quote->driver3_name}}</p>
                <p class="text-center">Driver3 Age:&nbsp;{{$quote->driver3_age}}</p>
                <p class="text-center">Driver4 Name:&nbsp;{{$quote->driver4_name}}</p>
                <p class="text-center">Driver4 Age:&nbsp;{{$quote->driver4_age}}</p>
                <p class="text-center">Driver5 Name:&nbsp;{{$quote->driver5_name}}</p>
                <p class="text-center">Driver5 Age:&nbsp;{{$quote->driver5_age}}</p>
            </div>
            <form method="POST" action="{{route('quote.destroy', $quote->id)}}">
                @csrf
                {{ method_field('DELETE') }}
                <div class="form-group text-right mr-5">
                    <input type="submit" class="btn btn-danger ml-auto" value="Delete Quote">
                </div>
            </form>
        </div>
    </div>
</section>


@endsection