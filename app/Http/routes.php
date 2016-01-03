<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home', array('name' => 'leo', 'email' => 'leonardo.souzas30@gmail.com'));
    //return view('home')->with("name", "leo");

});


// ? é pra deixar o parâmetro opcional
Route::get('/home/{name?}', function ($name = "leo") {
    return view('home', array('name' => $name, 'email' => 'leonardo.souzas30@gmail.com'));
    //return view('home')->with("name", "leo");

});

//Route::get('/todos', 'TodoListController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

Route::get('/db', function () {


    /*DB::table('todo_list')->insert(
        array('name' => 'Ruan')
    );
    */
    //return DB::table('todo_list')->get();
    //return DB::select('select database();');
    $array = DB::table('todo_list')->where('name', 'Leonardo')->first();

    echo $array->name;

});


//Rota /todos/store não existe o post é feito na rota /todos que tem get pra mostrar e post pra capturar a informação
//Se for necessário mostrar a página visualmente e postar nela é preciso fazer tanto a rota com o get quanto com o post
//Route::get('/todos/store', 'TodoListController@store');


//Captura todas as ações de uma vez tranformando nas rotas do arquivo TodoListController sem precisar especificar um por um
Route::resource('todos', 'TodoListController');
