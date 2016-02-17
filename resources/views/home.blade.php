@extends('app')

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h1>Let's Encrypt!</h1>
                <p>This website was created as part of the project for a Masters Program in Information Security. It's purpose is to test the deployment of certificates issued by the Let's Encrypt Certificate Authority. </p>
                <p><a class="btn btn-default btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
            </div>

            <div class="col-md-6">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/pCy372_akuQ" frameborder="0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>
@stop
