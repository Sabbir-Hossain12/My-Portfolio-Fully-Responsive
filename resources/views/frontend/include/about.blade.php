<!-- About me -->
<section class="blackish margin" id="about_me">
    <div class="container text-center pb-4">
        <h3 class="text-header headline">About Me</h3>
    </div>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <img
                        src="{{asset($about->cover_img)}}"
                        class="about-img rounded" alt="cover-pic"
                />
            </div>

            <div
                    class="col-12 col-md-12 col-lg-12 col-xl-12 intro d-flex justify-content-center flex-column"
            >
                <h2>I am <span class="headline">{{$about->title}}</span></h2>
                <h5>{{$about->designation}}</h5>
                <hr/>
                <p>
                    {{$about->short_desc}}
                </p>
            </div>
        </div>
    </div>
</section>