<!-- Contact US -->

<section class="blueish margin-contact" id="contact">
    <!--Section heading-->
    <div class="text-center p-3">
        <h3 class="text-header h1-responsive font-weight-bold text-center margin headline pt-0">
            Contact Me
        </h3>
    </div>
    <div class="container">


        <div class="row justify-content-center">
            <!--Grid column-->
            <div class="col-md-6 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="{{route('contact.store')}}" method="POST">
                    @csrf
                    <!--Grid row-->
                    <div class="row mb-2">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-2">
                                <input type="text" id="name" name="name" class="form-control" required/>
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" required  />
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" required/>
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mb-2">
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2"
                                          class="form-control md-textarea" required></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
               

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-success btn-block">Send</button>
                </div>
                </form>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>{{$basicInfo->address ?? 'Dhaka,Bangladesh'}}</p>
                    </li>

                    <li>
                        <i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>{{$basicInfo->phone ?? '+8801926241906'}}</p>
                    </li>

                    <li>
                        <i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>{{$basicInfo->email ?? 'h.sabbir36@yahoo.com'}}</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
    </div>
</section>