<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Model\Forum\Category;
use App\Model\Forum\Question;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
{
// $this->middleware('api');
}


   public function index($category)
    {
        $question =Question::where('category_id', $category)->latest()->paginate(10);

       return $question;
    }


    public function store(Request $request,$category)
    {
 // 'title','body' ,'id_user', 'id_school', 'id_category'

 $this->validate($request, [
    'title' => 'required|string|max:100',
    'body' => 'required|string|max:5000',
]);




try {
   

   
       
    $user = Auth::user();
  

    $question =new Question;
    $question->title = $request->title;
    $question->body = $request->body;
    $question->user_id =  $user["_id"];
    $question->school_id =  $user["school_id"];
    $question->category_id = $category;
    
    $question->save();
    return response( )->json(['message' => 'Question create'],201); 

} catch (Throwable $e) {
   
    return response( )->json(['error' => $e],201); 
  
}





    }
	

    



    public function show($category,Question $question)
    {
        return $question;
    }

  

    public function update($category, Question $question, Request $request)
    {
        $this->validate($request, [
            'title' => 'string|max:100',
            'body' => 'string|max:5000',
        ]);

        try {   

   //    return $request;

       $question->update($request->all());
       return response( )->json(['message' => 'Question update'],201);
        }

  catch (Throwable $e) {
   
    return response( )->json(['error' => $e],201); 
  
}
	

    }

    public function destroy($category,Question $question)
    {
		
        try {		
  $question->delete();
  return response( )->json(['message' => 'Question delete'],201);
}
        
  catch (Throwable $e) {
   
    return response( )->json(['error' => $e],201); 
  
}



    }
	
	    


	
}

