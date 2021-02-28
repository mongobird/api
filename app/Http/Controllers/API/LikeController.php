<?php

namespace App\Http\Controllers\API;

use App\Model\Forum\Like;
use App\Model\Forum\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    
public function Likeit(Reply $reply)
{
$reply->like()->create([
    'user_id' => auth()->id()
  
]);

return response( )->json(['message' => 'Like create'],201); 

}

public function unLikeit( $reply)
{
Like::where('reply_id', $reply)->where('user_id',auth()->id())->first()->delete();
return response( )->json(['message' => 'Like delete'],201); 
}


}
