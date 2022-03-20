@section('title','Home')
@extends('branch')

@section('content')
<section class="contact-section">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="contact-info">
                    <h3>Get the information you are looking for right now</h3>
                    <p>If your looking for a professional outlook on your symptoms, you can use our application.
                         It gets the information and recovery process moving right away</p>
                    <div class="circular-icons social-links">
                        <ul>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('status') }}
                    </div>
                @elseif(session('failed'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('failed') }}
                    </div>
                @endif
                <form class="contact-form" action="{{route('form.search')}}" method="GET" role="search">
                    {{csrf_field()}}
                    <h3>Feeling a headache or nausea?</h3>
                    <p>Feel free to help us diagnose your symptoms</p>
                    <textarea rows="7" class="form-control" placeholder="Type your symptoms here" name="search">

                    </textarea>

                    <button class="btn btn-solid" type="submit">Diagnose</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
