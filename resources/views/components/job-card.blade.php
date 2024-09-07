@props(['job'])

<div class="top-jobs-card">
    <div>
        <a href="">{{$job->employer->name}}</a>
    </div>
    <div>
        <h3>{{$job->title}}</h3>
        <p>{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
        <x-employer-logo :width="42"></x-employer-logo>
    </div>
</div>