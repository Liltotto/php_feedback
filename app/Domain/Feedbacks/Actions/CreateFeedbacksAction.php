<?php

namespace App\Domain\Feedbacks\Actions;

use App\Domain\Feedbacks\Models\Feedbacks;

class CreateFeedbacksAction
{
    public function execute(array $fields): Feedbacks
    {
        $feedbacks = new Feedbacks();
        $feedbacks->fill($fields);
        $feedbacks->save();

        return $feedbacks;
    }
}
