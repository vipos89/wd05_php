<?php


    namespace App\Controllers;


    use App\Helpers\Debugger;
    use App\Models\Contact;
    use App\Models\Post;
    use App\Models\User;

    class HomeController
    {
        public function index()
        {

            $h1 = 'Hello world';
            $posts = Post::getAll();
            view('index',  compact('h1', 'posts'));

        }

        public function about(){
            view('about');
        }

        public function contact(){
            view('contact');
        }

        public function post_contact()
        {
            $contact = new Contact();
            $contact->name = $_POST['name'];
            $contact->phone = $_POST['phone'];
            $contact->email = $_POST['email'];
            $contact->message = $_POST['message'];
            $contact->save();

        }

        public function notFound(){
            view('404');
        }
    }