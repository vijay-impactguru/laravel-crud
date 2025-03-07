<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    // Update the post\? 
    public function update($id, array $data)
    {
        // Find the post by ID or fail
        $post = Post::findOrFail($id);

        // Update the post's attributes
        $post->title = $data['title'];
        $post->content = $data['content'];

        // Handle status (checkbox value)
        $post->status = isset($data['status']) && $data['status'] == 1 ? 1 : 0;  // 1 for checked, 0 for unchecked

        // Save the updated post
        return $post->save();
    }
    public function test(){
        print_r("expression");
        die();
    }
}
