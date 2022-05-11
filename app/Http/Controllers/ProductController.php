<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {
            $product = Product::where([
                ['name', 'like', '%' .$search. '%']
                ])->get();

        } else {
            $product = Product::all();
        }

        return view('home', ['products' => $product, 'search' => $search]);
    }

    public function create() {
        return view('create/product');
    }

    public function store(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->value = $request->value;

        // Upload imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image; // Seta o request da imagem na variavel
            $extension = $requestImage->extension(); // Pega a extensao do arquivo
            $imageName = md5($requestImage->getClientOriginalName()). '.' . $extension; // da um md5 no nome original do arquivo concatenando com o tempo de agr(strtotime-now) e com a extensao recebida
            $requestImage->move(public_path('img/blogs'), $imageName); // Pega o request recebido pelo input e move ele pra img/blogs com o nome da variavel atribuida
            $product->image = $imageName; // Seta o blog-image do banco de dados como image name (por conta do campo no BD ser um texto)
        }

        $user = auth()->user();
        $product->user_id = $user->id;

        $product->save();
        return redirect('/')->with('msg', 'Produto criado com sucesso!');
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $productOwner = User::where('id', $product->user_id)->first();
        return view('produto-detalhes', ['product' => $product, 'productOwner' => $productOwner]);
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msgDelete', 'Evento deletado com sucesso!');
    }
}   