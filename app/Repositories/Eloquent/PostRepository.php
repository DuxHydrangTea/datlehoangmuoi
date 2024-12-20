<?php
namespace App\Repositories\Eloquent;
use App\Repositories\PostRepositoryInterface;
use App\Models\Post;
use Str;
class PostRepository extends BaseRepository implements PostRepositoryInterface
{


    public function all()
    {
        return $this->model->public()->get()->sortByDesc('id');

    }
    // PUBLIC
    public function getAllPublic()
    {
        return $this->model->public()->get()->sortByDesc('created_at');

    }
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
        // return $this->model->where('slug', $slug)->firstOr();
    }
    public function getPostsByCate($category_id)
    {
        if (!$category_id) {
            return $this->model->public()->whereNot('category_id', 0)->get();
        }

        return $this->model->public()->where('category_id', '=', $category_id)->get();
    }
    public function getPublicOutstandingPost()
    {
        return $this->model->public()->where('is_outstanding', '=', 1)->get();
    }
    public function getPostByType($type)
    {

        if ($type == "video")
            return $this->model->public()->where('type_id', 2)->get();
        if ($type == "audio")
            return $this->model->public()->where('type_id', 3)->get();
        else
            return $this->model->public()->where('type_id', 1)->get();
    }


    public function findInTrash($id)
    {
        return Post::withTrashed()->find($id);
    }
    // get All
    public function searchByQuery($query)
    {
        $posts = [];
        foreach ($this->model->public()->get() as $post) {
            if (Str::contains(Str::of($post->title)->lower(), Str::of($query)->lower())) {
                $posts = [...$posts, $post];
            }
        }

        return $posts;
    }


    public function getPostsByListCate($array_categories)
    {
        // dd($array_categories);
        $array_posts = [];
        $list_id = [];
        foreach ($array_categories as $category) {

            array_push($list_id, $category->id);
            $posts = Post::public()->where('category_id', $category->id)->get();
            foreach ($posts as $p) {
                $array_posts = [...$array_posts, $p];
            }

        }

        return $array_posts;
    }
}