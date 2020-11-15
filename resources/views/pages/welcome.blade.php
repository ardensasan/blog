@extends('main')
@section('title','| Homepage')
@section('content')

<div class="row-mt-200">
    <div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-4">Welcom to my blog</h1>
        <p class="lead">Thank you for visiting</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
        </p>
        </div>
    </div>
</div><!-- end of header row -->
<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Tile</h3>
            <p>Lorem ipsum, or lipsum as it is sometimes known,
                is dummy text used in laying out print, graphic or web designs.
                The passage is attributed to an unknown typesetter
                in the 15th century who is thought to have scrambled p
                arts of Cicero's De Finibus Bonorum et Malorum for u
                se in a type specimen book.</p>
            <a href="#" class="btn btn-primary">Read</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h1>Sidebar</h1>
    </div>
</div>
@stop
