<?php

namespace App\Http\Requests;

use App\Params\QueryParams;
use Illuminate\Foundation\Http\FormRequest;

class UserQueryRequest extends FormRequest
{
    protected string $params = QueryParams::class;

    public function rules(): array
    {
        return [
            'search'                       => 'string|max:10|nullable',
            'filters.email'                => 'array',
            'filters.email.verified'       => 'array',
            'filters.email.verified.start' => 'date_format:',
            'filters.email.verified.end'   => 'date_format:',

        ];
    }

    public function getParams()
    {
        return $this->params::fromRequest($this);
    }
}
