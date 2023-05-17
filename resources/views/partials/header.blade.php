<header class="masthead" style="background-image: url('/assets/img/background.jpg')">
    <div class="container-fluid position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Economic Blog</h1>
                    @if (Request::is('posts'))
                        <span class="subheading">Blog Session</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>