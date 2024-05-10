<?php

namespace App\Http\ApiV1\Modules\Feedbacks\Controllers;

use App\Domain\Feedbacks\Actions\CreateFeedbacksAction;
use App\Http\ApiV1\Modules\Feedbacks\Queries\FeedbacksQuery;
use App\Http\ApiV1\Modules\Feedbacks\Requests\CreateFeedbacksRequest;
use App\Http\ApiV1\Modules\Feedbacks\Resources\FeedbacksResource;

class FeedbacksController
{
    public function create(CreateFeedbacksRequest $request, CreateFeedbacksAction $action): FeedbacksResource
    {
        return new FeedbacksResource($action->execute($request->validated()));
    }

    public function get(int $id, FeedbacksQuery $query): FeedbacksResource
    {
        return new FeedbacksResource($query->findOrFail($id));
    }
}