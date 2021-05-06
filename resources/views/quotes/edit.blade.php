@extends('layouts.app')

@section('content')

<section class="edit-quote">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Edit Quote</h2>
                            <div class="ml-auto">
                                <a href="{{route('quote.index')}}" class="btn btn-outline-secondary">Back to all Quotes</a>
                            </div>
                        </div>                   
                    </div>

                    <div class="card-body">
                    <form action="{{route('quote.update', $quote->id)}}" method="post">
                            {{method_field('PUT')}}
                            @include ("quotes._form", ["buttonText"=>"Update"])
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection