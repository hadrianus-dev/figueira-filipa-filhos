<?php

namespace App\Http\Livewire\Web\Pages;

use Domain\Category\Models\Category;
use Domain\Comment\Models\Comment;
use Domain\Post\Models\Post;
use Livewire\Component;

class BlogSingleController extends Component
{
    protected $listeners = ['comment' => 'comment'];

    public $post;
    public $posts;
    public $categories;
    public $comment;
    public $comments;

    protected $rules = [
        'comment.name' => 'required|string|min:3',
        'comment.email' => 'required|email',
        'comment.body' => 'required|string|min:3'
    ];

    public function mount(Post $post, Category $category, Comment $comment): void
    {
        $this->post = $post;
        $this->comment = $comment;
        $this->comments = $comment::where('post_id', $post->id)->orderBy('created_at', 'desc')->get();

        $this->posts = Post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->categories = $category::where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function comment()
    {
        $data = $this->validate()['comment'];
        $data['portfolio_id'] = null;
        $data['published'] = true;
        $this->post->comment()->create($data);
        $this->comment->fresh();
        $this->comment->name = '';
        $this->comment->email = '';
        $this->comment->body = '';
    }

    public function render()
    {
        return view('livewire.web.pages.bog-single-controller')->layout('layouts.base');
    }
}
