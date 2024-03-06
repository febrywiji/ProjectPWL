namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $fillable = ['title', 'author', 'description', 'cover_image', 'file'];
}