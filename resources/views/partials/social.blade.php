<div class="social-icon d-flex justify-content-center">
    <ul class="list-inline">
        @foreach($socialLinks as $socialLink)
            <li class="list-inline-item {{$socialLink->title}}">
                <a href="{{$socialLink->link}}"><i class="{{$socialLink->icon}}"></i>{{ucfirst($socialLink->title)}}</a>
            </li>
        @endforeach
    </ul>
</div>