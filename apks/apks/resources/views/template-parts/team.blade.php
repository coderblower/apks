@if($get_advisor->count() > 0)
<section class="wide-tb-100 team-bg mb-spacer-md">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-4 col-md-6">
                <h1 class="heading-main">
                    <small>Team Member</small> Our Advisory Board
                </h1>
            </div>
            <div class="col-lg-8 col-md-6 text-md-right btn-team">
                <a href="{{ route('team.advisory') }}" class="btn btn-outline-dark">View All Members</a>
            </div>
        </div>

        <div class="row">
            <!-- Team Column One -->
            @foreach ($get_advisor as $item)
                
          
            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="team-section-wrap mb-4 text-center">
                    <div class="img green">
                        <div class="social-icons">
                            @if($item->member_facebook)
                            <a href="{{ $item->member_facebook }}"><i class="icofont-facebook"></i></a>
                            @endif
                            @if($item->member_twitter)
                            <a href="{{ $item->member_twitter }}"><i class="icofont-twitter"></i></a>
                            @endif
                            @if($item->member_facebook)
                            <a href="{{ $item->member_instagram }}"><i class="icofont-instagram"></i></a>
                            @endif
                        </div>
                        <img src="{{ asset('apks/public/uploads/team/'.$item->member_photo) }}" alt="team member">
                    </div>
                    <h4>{{ $item->member_name }}</h4>
                    <h5>{{ $item->member_designation }}</h5>
                </div>
            </div>
            <!-- Team Column One -->
            @endforeach
            
        </div>
    </div>
</section>

@endif