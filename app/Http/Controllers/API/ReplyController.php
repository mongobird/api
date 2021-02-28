<?php

namespace App\Http\Controllers\API;

use App\Model\User\User;
use App\Model\Forum\Reply;
use Illuminate\Http\Request;
use App\Model\Forum\Question;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class ReplyController extends Controller
{

    public function index($category,$question)
    {
    

        $reply =Reply::where('question_id', $question)->latest()->paginate(10);
        
        return $reply;

    }


    public function store($category,Question $question, Request $request)
    {
       
        $input = $request;
       
        $user = Auth::user();

        $input["user_id"] =$user["_id"];
        $input["category_id"] =$category;
    
        $question->replies()->create($input->all());

        return response( )->json(['message' => 'Reply create'],201); 
    }


    public function show( $category, Question $question, Reply $reply)
    {
      return $reply ;
    }


    public function update( $category, $question, Reply $reply,Request $request)
    {
        $this->validate($request, [
            'body' => 'string|max:5000'
        ]);

        try {   

                $reply->update($request->all());
                return response( )->json(['message' => 'Reply update'],201);
                 }
         
           catch (Throwable $e) {
            
             return response( )->json(['error' => $e],201); 
           
         }

    }


    public function destroy($category,$question, Reply $reply)
    {
     
        try {		
            $reply->delete();
            return response( )->json(['message' => 'Reply delete'],201);
          }
                  
            catch (Throwable $e) {
             
              return response( )->json(['error' => $e],201); 
            
          }



    }
}
