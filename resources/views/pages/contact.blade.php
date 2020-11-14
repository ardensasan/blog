@extends('main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <div class="form-group">
            <label name="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
        <label name="subject">Subject:</label>
        <input type="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
        <label name="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">Type your message here
        </textarea>
        </div>

        <input type="submit" value="Send Message" class="btn btn-success">

    </div>
</div><!-- end of header row -->
@stop
