<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
//use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('admin.posts.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {

        $post = $this->post->create($request->all()); 

        $post->tags()->sync($this->getTagsId($request->tags));

        return redirect()->route('admin.posts.index');
        
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('admin.posts.edit',['post' => $post]);
    }

    public function update(PostRequest $request, $id)
    {
         
        $this->post->find($id)->update($request->all());    
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsId($request->tags));

        return redirect()->route('admin.posts.index');
    }

    public function delete($id)
    {
        $post = $this->post->find($id);
        return view('admin.posts.delete',['post'=>$post]);
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return redirect()->route('admin.posts.index');
    }

    private function getTagsId($tags)
    {
        $tagList = array_filter(array_map('trim',explode(',',$tags)));

        $tagsId = [];

        foreach ($tagList as $tagName) {
            $tagsId[] = Tag::firstOrCreate(['name' => $tagName])->id;
        }
 
        return $tagsId;

    }
}
