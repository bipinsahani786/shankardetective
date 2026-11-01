<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $query = Post::published()->with(['category', 'tags'])->latest('published_at');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(9)->withQueryString();
        $categories = Category::withCount('posts')->get();
        $tags = Tag::all();
        $featuredPosts = Post::published()->take(3)->get();

        return view('blog.index', compact('posts', 'categories', 'tags', 'featuredPosts'));
    }

    public function show(string $slug): View
    {
        $post = Post::published()->with(['category', 'tags'])->where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->where('category_id', $post->category_id)
            ->take(3)
            ->get();

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = Post::published()->where('id', '!=', $post->id)->take(3)->get();
        }

        $categories = Category::withCount('posts')->get();

        return view('blog.show', compact('post', 'relatedPosts', 'categories'));
    }

    public function category(string $slug): View
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->published()->with('tags')->latest('published_at')->paginate(9);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::all();

        return view('blog.category', compact('category', 'posts', 'categories', 'tags'));
    }

    public function tag(string $slug): View
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->published()->with('category')->latest('published_at')->paginate(9);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::all();

        return view('blog.tag', compact('tag', 'posts', 'categories', 'tags'));
    }
}
