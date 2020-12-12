<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-lg-flex justify-content-between">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-white mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
        <div>
            @if (isset($link) && isset($linkName))
            <div class="col-auto px-0">
                <div class="float-lg-right">
                    <a href="{{ route($link) }}" class="btn btn-primary mt-3">
                        {{ $linkName }}
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div> 