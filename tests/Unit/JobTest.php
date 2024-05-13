<?php

use App\Models\Job;

it('belongs to a employer', function () {
    // Arrange
    $employer = \App\Models\Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    // Act
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
