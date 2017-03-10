<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use Illuminate\Support\Facades\Input;

use Response;

class CommentController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Comment::get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
   /* public function store()
    {
        Comment::create(array(
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ));
    
        return Response::json(array('success' => true));
    }*/

    public function store(Request $request)
    {
        /*echo 'ok';
        $input = $request->all();

        Comment::create($input);*/
        $comment = new Comment();

        $comment->author = $request->author;       

        $comment->text = $request->text;

        $comment->save();

        /*return redirect()->back();*/
        return Response::json(array('success' => true));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
    
        return Response::json(array('success' => true));
    }
}
