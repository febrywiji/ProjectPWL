namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;

class EbookController extends Controller
{
    public function index()
    {
        $ebooks = Ebook::all();
        return view('ebook.index', compact('ebooks'));
    }

    public function show($id)
    {
        $ebook = Ebook::find($id);
        return view('ebook.show', compact('ebook'));
    }
}