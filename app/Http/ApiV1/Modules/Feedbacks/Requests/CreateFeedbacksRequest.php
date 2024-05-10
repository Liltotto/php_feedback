<?php

namespace App\Http\ApiV1\Modules\Feedbacks\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateFeedbacksRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'body' => ['required', 'string'],
            'name' => ['required', 'string'],
        ];
    }
}