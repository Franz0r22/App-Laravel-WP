@php($counter = 1)
@include('slider')
<div style="margin: 100px auto">
    <div class="container pt-5">
        <div class="row pt-2">
            <div class="col-12">
                <h1>ESTO FUNCIONA!</h1>
                <p>La variable es = {{$counter}}</p>
            </div>
        </div>
    </div>
</div>
{!! get_footer() !!}


