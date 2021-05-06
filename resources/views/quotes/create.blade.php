@extends('layouts.app')

@section('content')

<section class="create-quote py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Create Quote</h2>
                            <div class="ml-auto">
                                <a href="{{route('quote.index')}}" class="btn btn-outline-secondary">Back to all Quotes</a>
                            </div>
                        </div>                   
                    </div>

                    <div class="card-body">
                    <form action="{{route('quote.store')}}" method="post">
                            @include ("quotes._form", ["buttonText"=>"Create Quote"])
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection