<?php

    namespace App\Http\Controllers;

    use App\Models\Post;
    use Illuminate\Http\Request;

    class PostsController extends Controller
    {
        public function index()
        {
            $posts = (new Post)->where('IsActive', '=', true)->get();

            return view("posts.index", ['posts' => $posts]);
        }

        public function edit($id)
        {
            $post = (new Post)->find($id);
            return view('posts.edit', ['post' => $post]);
        }

        public function update(Request $request, $id)
        {
            $post = (new Post)->find($id);
            $post->Title = $request->input('Title');
            $post->Link = $request->input('Link');
            $post->ShortDescription = $request->input('ShortDescription');
            $post->ContentHTML = $request->input('ContentHTML');
            $post->EditDateTime = date('y-m-d h:i:s');
            $post->save();
            return redirect('/posts');
        }

        public function new()
        {
            return view('posts.new');
        }

        public function create(Request $request)
        {
            $post = new Post();
            $post->Id = null;
            $post->Title = $request->input('Title');
            $post->Link = $request->input('Link');
            $post->ShortDescription = $request->input('ShortDescription');
            $post->ContentHTML = $request->input('ContentHTML');
            $post->IsPublic = true;
            $post->PublishDateTime = date('y-m-d h:i:s');
            // CreationDateTime i EditDateTime też są wymagane ale Laravel generuje je automatycznie
            // I przypisujemy je w pliku Post.php jako CREATED_AT i UPDATED_AT
            $post->IsActive = true;
            $post->save();
            return redirect('/posts');
        }

        // deaktywuje w bazie dane wydarzenie, ale nie usuwa
        public function delete($id) {
            $post = (new Post)->find($id);
            $post->IsActive = false;
            $post->save();
            return redirect('/posts');
        }
    }
