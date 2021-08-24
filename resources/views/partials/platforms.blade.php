@foreach($platforms as $platforms)
        <article class="my-5">
            <header class="mb-3 border-bottom">
                <div class="d-flex align-items-center align-content-center ">
                    <img src="{{$platforms->logo}}" width="100px" height="100px" class=mx-3></img>
                    <h2><a href="#">{{ $platforms->name }} </a> </h2>
                </div>
            </header>
        </article>
@endforeach