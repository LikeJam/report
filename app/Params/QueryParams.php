<?php

namespace App\Params;

use App\Http\Requests\UserQueryRequest;

readonly class QueryParams
{
    public function __construct(public ?string $search, public ?array $filters)
    {
    }

    public static function fromRequest(UserQueryRequest $request): static
    {
        return new static(
            search: $request->search,
            filters: []
        );
    }
}
