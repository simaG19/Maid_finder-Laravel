<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>

@include('partials.header')

<div id="hero">
    <div class="search-content" style="background:url(images/background.svg) no-repeat">
        <div class="wrapper"> 
            <h2><strong>Millions of Maids for you.</strong> Verified by us.</h2>
            <a href="{{ url('login_form') }}" class="button-1">Search Maid</a>
        </div>
    </div>
</div>

<section class="home-about">
    <div class="image">
        <img src="images/home_maid.jpg" alt="">
    </div>
    <div class="content">
        <h3>We're not your typical Maid site.</h3>
        <p>We're different and make it easier to find your next good maid.</p>
        <a href="{{ url('about') }}" class="btn">Read More</a><br>
    </div>
</section>

<div class='maid'>
    @foreach($companies as $company)
        @php
            $maidCount = DB::table('maid_form')->where('broker', $company->name)->count();
        @endphp

        <div class="container my-5">
            <div class="shadow-4 rounded-5 overflow-hidden">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Brokers</th>
                            <th>Broker Name</th>
                            <th>Maids</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/broker.png" alt="" style="width: 45px; height: 45px" class="rounded-circle">
                                </div>
                            </td>
                            <td>
                                <p class="fw-bold mb-1">{{ $company->name }}</p>
                            </td>
                            <td>
                                <p class="fw-bold mb-1">{{ $maidCount }}</p>
                            </td>
                            <td>
                                <a href="{{ url('login_form') }}"><button type="button" class="btn btn-link btn-sm btn-rounded">View</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

    <div class="pagination">
        Pages: 
        @for($i = 1; $i <= $total_pages; $i++)
            <a href="{{ url('home?page=' . $i) }}">{{ $i }}</a>&emsp;
        @endfor
    </div>
</div>

@include('partials.footer')

</body>
</html>
