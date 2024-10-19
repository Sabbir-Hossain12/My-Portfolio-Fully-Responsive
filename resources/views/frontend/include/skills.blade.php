<section class="blueish">
    <div class="text-center margin ">
        <h3 class="headline">Skills And Info</h3>
    </div>
    <div class="container">
        <div class="row  justify-content-around">
            <div class="column col-lg-5" style="border-right: 1px solid #343a4015; border-bottom: solid #343a4015  ;">
             
                @forelse($skills as $skill) 
                    <h5 class="skill-header mt-3 headline">{{$skill->skill_title}}</h5>
                    {!! $skill->skill_desc !!}
                @empty
                @endforelse

            </div>
            
            
            

            <div class="col-lg-6 grid-align py-3 secondary-info" style="border-bottom: 1px solid #343a4015;">
            <div class="d-flex column-gap-5">
                <div class="d-flex flex-column justify-content-between">
                    <p class="fw-semibold">Age</p>
                    <p class="fw-semibold">University</p>
                    <p class="fw-semibold">Degree</p>
                    <p class="fw-semibold">Passed Year</p>
                    <p class="fw-semibold">Address</p>
                    <p class="fw-semibold">E-Mail</p>
                    <p class="fw-semibold">Phone</p>
                </div>

                <div class="d-flex flex-column justify-content-between">
                    <p>{{$basicInfo->age ?? '25'}}</p>
                    <p>{{$basicInfo->university?? 'North South University'}}</p>
                    <p>{{$basicInfo->degree ?? 'BSc in Computer Science and Engineering'}}</p>
                    <p>{{$basicInfo->passed_year ?? '2022'}}</p>
                    <p>{{$basicInfo->address ?? 'Dhaka,Bangladesh'}}</p>
                    <p>{{$basicInfo->email ?? 'h.sabbir36@yahoo.com'}}</p>
                    <p>{{$basicInfo->phone ?? '8801926241906'}}</p>
                </div>
            </div>
        </div>
    </div>

    
</section>