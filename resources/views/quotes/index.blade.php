@extends('layouts.app')

@section('content')

<section class="quotes py-5">
@include ("quotes._flashMessage")
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Quotes</h2>
                        <div class="ml-auto">
                            <a href="{{route('quote.create')}}" class="btn btn-outline-secondary">Create Quote</a>
                        </div>
                    </div>                  
                </div>
        
                <div class="card-body">
                    <!-- begin of quotes table -->
                    <table class="table table-striped my-3">
                        <thead>
                            <tr>
                                <th scope="col">Dot Number</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th> 
                                <th scope="col">Premium Amount</th>
                                <th scope="col">Premium Tax</th>
                                <th scope="col">Premium Total</th>
                                <th scope="col">Details</th>                 
                            </tr>
                        </thead>
                        <tbody>
                            <!-- loop throungh the user's quotes -->
                            @foreach($quotes as $quote)
                            <tr>
                                <th scope="row">{{$quote->dot_number}}</th>
                                <td>{{$quote->city}}</td>
                                <td>{{$quote->state}}</td>
                                <td>${{$quote->premium_amount}}</td>
                                <td>${{$quote->premium_tax}}</td>
                                <td>${{$quote->premium_total}}</td>
                                <td>
                                    <a href="{{route('quote.show', $quote->id)}}" class="btn button-main">View</a>
                                </td>              
                            </tr>
                            @endforeach
                        </tobody>
                        </table>
                        <!-- end of quotes table -->

                        <!-- pagination links -->
                        <div class="d-flex justify-content-center">
                            {{$quotes->links()}}
                        </div>
                        <!-- end of pagination links -->
                    </div>
                </div>
         </div>
    </div>
  </div>
</section>

  
@endsection