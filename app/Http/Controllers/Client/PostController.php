<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Str;
class PostController extends Controller
{
    //


    protected $categoryRepositoryInterface;
    protected $postgoryRepositoryInterface;
    public function __construct(CategoryRepositoryInterface $categoryRepositoryInterface, PostRepositoryInterface $postRepositoryInterface)
    {
        $this->postgoryRepositoryInterface = $postRepositoryInterface;
        $this->categoryRepositoryInterface = $categoryRepositoryInterface;
    }
    public function index()
    {
    }
    public function create()
    {
        // dd(Post::getColumns());
        $categories = $this->categoryRepositoryInterface->all();
        return view('client.post.create', compact('categories'));
    }
    public function store(Request $request)
    {

        try {
            $data = new Request($request->all());

            $data->merge(['slug' => Str::slug($request->title) . '-' . Str::random(5)]);

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $this->postgoryRepositoryInterface->upload_as($request->thumbnail);
                $data->merge(['thumbnail' => $thumbnail]);
                $this->postgoryRepositoryInterface->create($data->all());
                return redirect()->route('client.post.create')->with('message', 'Thêm bài viết thành công!');
            }

            $this->postgoryRepositoryInterface->create($data->all());
            return redirect()->route('client.post.create')->with('message', 'Thêm bài viết thành công!');
        } catch (\Throwable $th) {
            dd($th);
            $this->postgoryRepositoryInterface->create($data->all());
            return redirect()->route('client.post.create')->with('message', 'Thêm bài viết thất bại!');
        }
    }

    public function show($slug_category, $slug_blog)
    {
        //{slug-category}/{slug-blog}
        $cate = $this->categoryRepositoryInterface->findBySlug($slug_category);
        $post = $this->postgoryRepositoryInterface->findBySlug($slug_blog);

        if ($post) {
            if ($post->category_id != $cate->id) {
                return redirect()->route('index');
            } else {

                return view('client.post.show', compact('post'));

            }
        }
        return redirect()->route('index');
    }
    public function edit($slug_category, $slug_blog)
    {
        $categories = $this->categoryRepositoryInterface->all();
        $cate = $this->categoryRepositoryInterface->findBySlug($slug_category);
        $post = $this->postgoryRepositoryInterface->findBySlug($slug_blog);

        if ($post) {
            if ($post->category_id != $cate->id) {
                return view('client.error')->with('message', 'Không tìm thấy trang này!');
            } else
                return view('client.post.edit', compact('post', 'categories'));
        }
        return view('client.error')->with('message', 'Không tìm thấy trang này!');
    }


    public function update(Request $request, $id)
    {
        $data = new Request($request->all());

        $data->merge(['slug' => Str::slug($request->title) . '-' . Str::random(5)]);
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $this->postgoryRepositoryInterface->upload_as($request->thumbnail);
            $data->merge(['thumbnail' => $thumbnail]);
            $this->postgoryRepositoryInterface->update($id, $data->all());
            return redirect()->route('index')->with('message', 'Cập nhật bài viết thành công!');

        } else {
            $this->postgoryRepositoryInterface->update($id, $data->all());
            return redirect()->route('index')->with('message', 'Cập nhật bài viết thành công!');
        }


    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('index')->with('message', 'Xoá bài viết thành công!');
    }
    public function postsByCategorySlug($slug_category)
    {
        $cate = $this->categoryRepositoryInterface->findBySlug($slug_category);
        if (!$cate) {
            return redirect()->route('index');
        }
        $posts = $cate->posts->where('status', 'public')->sortByDesc('id');
        return view('client.post.list', compact('posts', 'cate'));
    }

    public function addCategory(Request $request)
    {
        $data = [
            ...$request->all(),
            'slug' => Str::slug($request->name),
        ];
        $this->categoryRepositoryInterface->create($data);
        return redirect()->back()->with('message')->with('Thêm thể loại thành công!');
    }



    public function hiddenList()
    {
        $posts = Post::private()->get();
        return view('client.post.hidden', compact('posts'));
    }

    public function setHidden($id)
    {
        $post = Post::find($id);
        $post->update([
            "status" => $post->status == "public" ? "private" : "public",
        ]);
        return redirect()->back()->with('message')->with('Thêm thể loại thành công!');
    }



    public function search(Request $request)
    {
        $search_query = $request->search_query;
        if (!$request->has('search_query')) {
            $posts = Post::public()->get();
            return view('client.post.all', compact('posts', 'search_query'));
        }
        $posts = Post::search($request->search_query)->get();
        return view('client.post.all', compact('posts', 'search_query'));
    }
}