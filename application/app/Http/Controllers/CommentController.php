<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller 
{
    public function save(Request $request) 
    {
        $comment =new Comment();
        $comment->commentType = $request->commentType;
        $comment->comment = $request->comment;
        $comment->commentDatetime = $request->commentDatetime;
        $comment->userID = $request->userID;
        $comment->save();
        return $request;
   
    }

    public function update(Request $request)
    {
        $comment =new Comment();      
        $comment->where(
            "commentID","=",     $request->commentID,
            "commentType","=",   $request->commentType,
            "comment","=",     $request->comment,
            "commentDatetime","=", $request->commentDatetime,
            "userID","=",       $request->userID
            )
            ->update($request->all());    
        return $request;
        
    }

    public function delete(Request $request)
    {
        $comment =new Comment(); 
        $comment->where(
            "commentID","=", $request->commentID)->delete($request);
        return "delete";
    }  

    public function show()
    {
        $comment =new Comment();
         return $comment;
    }
    public function commentform()
    {
        $comment =new Comment();
        $comment->all();
        return view('comment',[
            'comment'=>$comment
        ]);
    }
    public function commentadmin()
    {
        $comment =new Comment();
        $comment->all();
        return view('comment_admin',[
            'comment'=>$comment
        ]);
    }

}