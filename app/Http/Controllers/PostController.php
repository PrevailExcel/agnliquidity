<?php
namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:writer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.listpost', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('image')) {

            $request->validate([
                'title' => 'required',
                'postbody' => 'required',
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $file = request()->file('image');
            $file->store('posts', ['disk' => 'public']);
            //$request->file->store('post', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.

            $posts = Post::create([
                'title' => $request->get('title'),
                'postbody'=> $request->get('postbody'),
                'image' => $file->hashName(),
                'created_at' => Carbon::now(),
            ]);
        }
            if($posts){
                Session::flash('Created', "Post Created successfully!");
                return redirect()->route('posts.index');
                }else{
                    Session::flash('Failed', "Post Created successfully!");
                    return redirect()->back();
            }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.editpost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
                $validated = $request->validate([
                    'title' => 'required',
                    'postbody'=> 'required',
                ]);

               $final = $post->update($request->all());
                if($final){
                Session::flash('Edited', "Post edited successfully!");
                return redirect()->route('posts.index');
                }else{
        abort(500, 'Could not upload image :(');
                }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        Session::flash('Deleted', "Post deleted successfully!");
        return redirect()->route('posts.index');
    }
}
