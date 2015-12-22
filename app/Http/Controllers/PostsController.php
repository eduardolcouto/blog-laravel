<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    
    private $post;

    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

    public function index()
    {
    	$posts = $this->post->paginate(2);

    	return view('post.index',['posts'=>$posts]);
    }
}
