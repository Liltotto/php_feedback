<?php
namespace App\Domain\Feedbacks\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 *
 * @property string $name User name
 * @property string $body Text of feedback

 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Feedbacks extends Model
{
    protected $table = 'feedbacks';
}
