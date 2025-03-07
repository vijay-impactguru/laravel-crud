<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // protected $postRepository;

    // public function _construct(PostRepositoryInterface $postRepository)
    // {
    //     $this->postRepository = $postRepository;
    // }
    // Display a listing of posts
    public function index(){
        $posts = Post::all();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('posts.index', compact('posts','categories'));
    }

    // Show the form for creating a new post
    public function create()
    {
        //$repo = new PostRepository;
        $categories = Category::pluck('name', 'id');
        return view('posts.create',compact('categories'));
    }

    // Store a newly created post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]); 
        $model = new Post();
        $model->title = $request->title;
        $model->content = $request->content;
        $model->status = isset($request->status) && !empty($request->status)?1:0;
        $model->save();
        //Post::create($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    // Display the specified post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Show the form for editing the specified post
    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');
        return view('posts.edit', compact('post','categories'));
    }

    // Update the specified post
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'nullable|boolean',
            'category_id' => 'required|exists:categories,id',
        ]);

        $model = Post::findOrFail($id);
        $model->title = $request->title;
        $model->content = $request->content;
        $model->category_id = $request->category_id;
        $model->status = isset($request->status) && !empty($request->status)?1:0;
        $model->save();
        //$this->postRepository->update($id, $request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }
    // Remove the specified post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}