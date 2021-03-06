@extends('layouts.home.blog')
@extends('layouts.home.header')

@section('blog_content')
<div class="row">
    <div class="col-md-9" id="1">
        <div class="blog_container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="info_title">
                                    <h3>お知らせ・更新</h3>
                                </div>
                            </div>

                            @foreach($notice_data as $notice)
                            <div class="row info">
                                <div class="col-md-2">
                                    <p>{{$notice->date}}:</p>
                                </div>
                                <div class="col-md-10" style="padding-left: 0px;">
                                    @if($notice->url_flg == 1)
                                    <a href="{{$notice->url}}">【Qiita】{{$notice->notice_content}}</a>
                                    @else
                                    <p>{{$notice->notice_content}}</p>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3" id="2">
        <div class="card" style="text-align: center; margin-right: 10px;">
            <div class="card-body">
                <div class="side_bar">
                    <h5>画像認識Line Bot</h5>
                    <img src="https://qr-official.line.me/sid/M/800wasae.png">
                    <!-- <h5>Twitter投稿</h5> -->
                    @foreach ($result as $tweet)
                    <blockquote class="twitter-tweet" style="width: 70%;">
                        <a href="https://twitter.com/React_Laravel_/status/{{ $tweet->id }}"></a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
