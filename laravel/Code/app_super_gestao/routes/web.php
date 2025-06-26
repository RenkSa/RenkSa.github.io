<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Home';
// });
// Route::get('/sobre-nós', function () {
//     return 'sobre-nós';
// });

// Route::get('/contato', function () {
//     return '';
// });

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    
    Route::get('/clientes', function(){
    return 'Clientes';
})->name('app.clientes');

    Route::get('/fornecedores', function(){
    return 'Fornecedores';
})->name('app.fornecedores');

    Route::get('/produtos', function(){
    return 'Produtos';
})->name('app.produtos');


});

//redirecionamento de rota
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste'); //observaçao de versao 



//redirecionamento de rotas
// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::redirect('/rota2', '/rota1');


//metodo de fallback
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="/">Clique aqui</a> para acessar a página inicial'; //no curso foi utilizada <a href="'.route('site.index')'">Clique aqui</a> não deu certo
});