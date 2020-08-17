@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-4 text-center">
                <img width="200px" height="200px" class="rounded-circle" src="https://i0.wp.com/wp.laravel-news.com/wp-content/uploads/2019/02/laravel-5.8.png?resize=2200%2C1125" alt="">
            </div>
            <div class="col-8">
                <div class="d-flex align-items-baseline">
                    <div class="h4 mr-3 pt-3">{{ $user->username }}</div>
                    <button class="btn btn-primary">S'abonner</button>
                </div>
                <div class="d-flex mt-3">
                    <div class="mr-3"> <strong>25</strong> publications</div>
                    <div class="mr-3"> <strong>951</strong> abonnés</div>
                    <div class="mr-3"> <strong>3</strong> abonnements</div>
                </div>
                <div class="mt-3">
                    <div class="font-weight-bold">{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <img src="https://www.cloudways.com/blog/wp-content/uploads/laravelbootstrap_banner.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://i2.wp.com/wp.laravel-news.com/wp-content/uploads/2017/11/bootstrap-4-preset.png?resize=2200%2C1125" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://www.cloudways.com/blog/wp-content/uploads/Bootstrap-Laravel-Thumb.jpg" class="w-100">
            </div>
        </div>
    </div>
@endsection
