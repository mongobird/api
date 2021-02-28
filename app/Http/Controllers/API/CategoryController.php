<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Model\Forum\Category;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{

    public function index()
    {
        $category =Category::latest()->paginate(10);

        return $category;


    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100' ]);

try {
    $category =new Category();
    $category->name = $request->name;
    $category->save();
    return response( )->json(['message' => 'Category create'],201); 
} catch (Throwable $e)
{
    return response( )->json(['error' => $e],201); 
}

    }


    public function show(Category $category)
    {
        return $category;
    }


    public function update(Request $request, Category $category)
    {
        
        $this->validate($request, [
            'name' => 'string|max:100',
        ]);

        try {   
       $category->update($request->all());
       return response( )->json(['message' => 'Category update'],201);
        }

  catch (Throwable $e) {
   
    return response( )->json(['error' => $e],201); 
  
}


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        try {		
            $category->delete();
            return response( )->json(['message' => 'Category delete'],201);
          }
                  
            catch (Throwable $e) {
             
              return response( )->json(['error' => $e],201); 
            
          }


        
    }
}
