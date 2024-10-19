<!-- Technology -->
<section class="margin blackish">
    <div class="text-center pb-3">
        <h3 class="headline">Technologies</h3>
    </div>

    <div class="container d-flex justify-content-around margin">
        
        @forelse($technologies as $technology)
       {!! $technology->technology_icon !!}
        @empty
        @endforelse


       

    </div>
</section>