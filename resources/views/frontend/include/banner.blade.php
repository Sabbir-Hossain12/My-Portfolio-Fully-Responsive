<!-- Banner image Background-->
<section id="home" style="background-image: url('{{asset($banner->background_img)}}')  !important;" class="background1 container-fluid d-flex justify-content-center align-items-center flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row">
    <div class="img-banner-pos shadow-sm pe-5">
        <img
                class="rounded-circle me-img"
                src="{{$banner->profile_img}}" alt="profile-picture"
        />
    </div>
    <div class="header-big">

        <!-- NAME AND TITLE -->
        <div>
            <h1 class="header bold strong m-0">{{$banner->name}}</h1>
            <h4 class=" subheader shadow-sm">{{$banner->designation}}</h4>
            <p class="short-des">{{$banner->short_description}}</p>
        </div>
        <div class=" d-flex gap-5  align-items-center social-icon" style="font-size: 30px;">
            <a class="link-success" href="https://github.com/Sabbir-Hossain12/" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a class="link-success" href="https://www.linkedin.com/in/Sabbir-Hossain13" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a class="link-success" href="https://twitter.com/SabbirH08434776" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a class="link-success" href="https://www.facebook.com/profile.php?id=61550605072721" target="_blank"><i class="fa-brands fa-facebook"></i></a>

        </div>
    </div>
</section>