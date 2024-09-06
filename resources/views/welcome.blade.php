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
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
        </div>
    </section>
    <section class="top-jobs--section">
        <x-section-heading>Tags</x-section-heading>
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </section>
    <section class="top-jobs--section">
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="recent-cards-grid">
            <x-job-card-wide></x-job-card>
            <x-job-card-wide></x-job-card>
            <x-job-card-wide></x-job-card>
        </div>
    </section>
</x-layout>