<x-layout>
    <section class="search-section">
        <h1>Let's Find Your Next Job!</h1>
        <form action="">
            <input type="text" placeholder="I'm looking for . . .">
        </form>
    </section>
    <section class="top-jobs--section">
        <x-section-heading>Top Jobs</x-section-heading>
        <div class="top-cards-grid">
            @foreach($featured_jobs as $job)
                <x-job-card :$job />
            @endforeach
        </div>
    </section>
    <section class="top-jobs--section">
        <x-section-heading>Tags</x-section-heading>
        <div>
            @foreach($tags as $tag)
            <x-tag :tag="$tag" />
            @endforeach
        </div>
    </section>
    <section class="top-jobs--section">
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="recent-cards-grid">
            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </div>
    </section>
</x-layout>