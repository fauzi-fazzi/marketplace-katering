@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ url('menu/create') }}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">My Products</h2>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="../assets/img/news/img08.jpg"
                                style="background-image: url(&quot;../assets/img/news/img08.jpg&quot;);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="../assets/img/news/img04.jpg"
                                style="background-image: url(&quot;../assets/img/news/img04.jpg&quot;);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="../assets/img/news/img09.jpg"
                                style="background-image: url(&quot;../assets/img/news/img09.jpg&quot;);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="../assets/img/news/img12.jpg"
                                style="background-image: url(&quot;../assets/img/news/img12.jpg&quot;);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="../assets/img/news/img12.jpg"
                                style="background-image: url(&quot;../assets/img/news/img12.jpg&quot;);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </section>
@endsection
