<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TodoListController extends Controller
{

    public function __construct()
    {
        //preciso ver isso melhor, a função está deprecated e o middleware n funcionou além do q o csrf parece já vir por default
        //$this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo_list = TodoList::all();
        return view('todos.index')->with('todo_list', $todo_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$list = new TodoList();
        $list->name = "Another Name";
        $list->save();
        return "Create a new list";*/

        /*Jeito 1 mais atual
        $input = $request->all();
        echo $input['title'];
        */

        /*Jeito 2 mais antigo
        $input = \Input::all();
        echo $input['title'];
         */

        //All retorna um array com todos os posts, get retorna um especifico
        //return \Input::all();

        //Validação do form

        $rules = array(
            'title' => array(
                'required', 'unique:todo_list,name'
            )
        );

        $validator = \Validator::make(Input::all(), $rules);

        //Testa a validade dos inputs
        if($validator->fails())
        {
            //redireciona pra url
            //return redirect('todos/create');
            //redireciona pra uma ação de um controller
            //return redirect()->action('HomeController@index');
            //return $messages;

            //$messages = $validator->messages();

            return Redirect::route('todos.create')->withErrors($validator)->withInput();

        }

        $name = \Input::get('title');
        $list = new TodoList();
        $list->name = $name;
        $list->save();
        return Redirect::route('todos.index')->withMessage('List was created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = TodoList::find($id);
        return view('todos.show')->withList($list);
        //return view('todos.show', array('id' => $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
