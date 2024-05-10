<?php

namespace App\Http\ApiV1\Modules\Feedbacks\Resources;

use App\Domain\Feedbacks\Models\Feedbacks;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Feedbacks
 */
class FeedbacksResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'body' => $this->body,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}