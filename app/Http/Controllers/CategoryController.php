<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // Display a listing of posts
    public function index(){
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('category.create');
    }

    // Store a newly created post
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'nullable|boolean',
        ]); 
        $model = new Category();
        $model->name = $request->name;
        $model->status = isset($request->status) && !empty($request->status)?1:0;
        $model->save();


        //Post::create($request->all());

        return redirect()->route('category.index')->with('success', 'Post created successfully.');
    }

    // Display the specified post
    public function show(Category $category)
    {
        return view('category.show', compact('post'));
    }

    // Show the form for editing the specified post
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    // Update the specified post
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'nullable|boolean',
        ]);
        $model = Category::findOrFail($id);
        $model->name = $request->name;
        $model->status = isset($request->status) && !empty($request->status)?1:0;
        $model->save();
        //$this->postRepository->update($id, $request->all());
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
    // Remove the specified post
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
