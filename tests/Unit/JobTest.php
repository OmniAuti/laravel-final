<?php

test('blongs to employer', function () {
    expect(true)->toBeTrue();
    ///AAA

    // Arrange
        $employer = \App\Models\Employer::factory()->create();
        $job = \App\Models\Job::factory()->create(
            [
                'employer_id' => $employer->id,
            ]);
    // Act
        $result = $job->employer->is($employer);
    // Assert
        expect($result)->toBeTrue();
});


test('can have tags', function() {
    $job = App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});