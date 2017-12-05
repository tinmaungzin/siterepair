<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\postsController;
use App\Http\Controllers\postsPhotoController;
class viewsController extends Controller
{
     protected $dataControllerPosts,$dataControllerPhotos;
    public function __construct()
    {
        // app()->bind('postsPhotosController',postsPhotosController::class);
        // app()->bind('postsController',postsController::class);

        $this->dataControllerPosts =app()->make('postsController');
        $this->dataControllerPhotos = app()->make('postsPhotosController');
    }

    public function index () {
//         $controller = App::make('postsController');
        $data = $this->dataControllerPosts->index();
        $posts = $data->getData()->posts;
        $photos = $data->getData()->photos;
        $announcements = $data->getData()->announcements;
//        return view('demo.index',['posts'=> $posts ,'photos' => $photos,'announcements' => $announcements]);
        return view('posts.index',['posts' => $posts]);
    }
    public function details ($id) {
//        $controller = new postsController;
        $data = $this->dataControllerPosts->details($id);
        $post = $data->getData()->post;
    	return view('posts.details',['post' => $post]);
    }

	public function add(){
    	return view('posts.add');
 	 }

 	public function edit ($id){
//        $controller = new postsController;
        $post = $this->dataControllerPosts->edit($id)->getData()->post;
 		return view('posts.edit',['post' => $post]);
 	}



 	public function photosIndex(){
        // $controller = new postsPhotoController;

 	    return view('photos.index');
    }
    public function photosAdd(){
 	    return view('photos.add');
    }

    public function photosDetails(){
        return view('photos.details');
    }

    public function photosEdit(){
        return view('photos.edit');
    }


 	

}
