<?php
//Imports
use Illuminate\Support\Facades\Route;
//Controller criado "php make:Controller HomeController"
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProdutosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Retorno com base em parametros

//chama a classe HomeController
Route::get('/', HomeController::class);
    
//chama a classe Produtos e a função create
Route::get('produtos/inserir', [ProdutosController::class,'create'])->name('produtos.inserir');
    

//parametro opcional ex: {valor?} , function ($valor=null)

//o apos a url : produtos/ será inserido o parametro $nome

/*
Route::get('produtos/{nome}/{valor?}', function ($nome,$valor = null) {
    if($valor){
    return ("Seu produto : $nome , e seu valor é : $valor");
    }else{
        return ("Seu produto : $nome ");
    }
    
});
*/

//Route::get('produtos/{nome}/{valor?}',[ProdutosController::class ,'show'] )->name('produtos.descricao');

Route::get('produtos/{id}',[ProdutosController::class,'show'])->name('produtos.descricao');

Route::get ('produtos',[ProdutosController::class,'index'])->name('produtos');
/*
Route::get('produtos', function () {
    return ("Pagina de produtos");
    
});

*/



