<?php

namespace App\Domain\Feedbacks\Models;

use App\Domain\Feedbacks\Models\Tests\Factories\FeedbacksFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property string $name User name
 * @property string $body Feedback text
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Feedbacks extends Model
{
    protected $table = 'feedbacks';

    // Поля, которые можно заполнять методом fill
    protected $fillable = ['name', 'body'];


    public static function factory(): FeedbacksFactory
    {
        return FeedbacksFactory::new();
    }
}