@extends('layouts.app')

@section('content')
<div>
    <p>プロフィール編集</p>
</div>
<div>
    @if ($is_Image)
    <figure>
        <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
        <figcaption>現在のプロフィール画像</figcaption>
    </figure>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif    
</div>
<div>
    <form method="POST" action="/profile" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>
            <span class="filelabel" title="ファイルを選択">
                <img src="img/camera-orange-rev.png" width="32" height="26" alt="+画像">
                選択
            </span>
            <input type="file" name="datafile" id="filesend">
        </label>
        <!-- <input type="submit" value="登録"> -->
    </form>
</div>
@endsection