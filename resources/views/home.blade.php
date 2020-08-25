@extends('layouts.app')

@section('content')
<div class="container" style="max-width:70%">
    <div class="d-flex row">
        <div class="col-3 p-5">
            <img src="/images/ebi.jpg" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>20</strong> posts</div>
                <div class="pr-5"><strong>450</strong> followers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->username }}</div>
            <div>{{ $user->profile->bio }}</div>
            <div><a href="#"> {{ $user->profile->website }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/14156547_976498119145013_1388190703_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=VIzloJ65E1AAX_4ONrv&oh=daeeb98c21eefcc1cb031ad88d4dbdcc&oe=5F6AA9DC" class="w-100 autoHeight" style="max-height: 80%;">
        </div>
        <div class="col-4">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/14156547_976498119145013_1388190703_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=VIzloJ65E1AAX_4ONrv&oh=daeeb98c21eefcc1cb031ad88d4dbdcc&oe=5F6AA9DC" class="w-100" style="max-height: 80%;">
        </div>
        <div class="col-4">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/14156547_976498119145013_1388190703_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=VIzloJ65E1AAX_4ONrv&oh=daeeb98c21eefcc1cb031ad88d4dbdcc&oe=5F6AA9DC" class="w-100" style="max-height: 80%;">
        </div>
    </div>
</div>
@endsection