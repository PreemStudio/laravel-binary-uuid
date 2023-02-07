<?php

namespace Tests\Unit\Casts;

use Tests\Fixtures\User;
use Illuminate\Database\Eloquent\Model;
use PreemStudio\BinaryUuid\Casts\Binary;
use Ramsey\Uuid\Uuid;

it('should get the UUID as a string', function () {
    expect(User::factory()->make()->uuid)->toBeString();
});
