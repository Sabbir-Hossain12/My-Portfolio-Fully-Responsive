<!-- Services -->
<section id="services" class="blueish margin">
    <div class=" background text-dark text-center pt-3">
        <h3 class="text-header headline">My Services</h3>
    </div>
    <div class="container margin">
        <div class="row justify-content-around">
            
            @forelse($services as $service)
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 shadow p-4 mt-5  rounded cart-bg">
                <div class=" mb-3">
                    <img src="{{ isset($service->service_icon) ?asset($service->service_icon) : ''}}" alt="frontend" style="height:50px; width:50px;"/>
                </div>
                <h4 class="headline-small">
                   {{$service->title ?? ''}}
                </h4>
                <p class="">
                    {{$service->desc ?? ''}}
                </p>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>