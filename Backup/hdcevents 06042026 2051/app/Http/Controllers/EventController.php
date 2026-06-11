<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    
    public function index(){

        $event = Event::all();
        
        return view('welcome', ['events'=> $event]);
    }

    public function create() {
        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function product($id = null) {
        return view('product',['id' => $id]);
    }

    public function store(Request $request){

        // $event= new Event;

        console.log('Iniciando o teste de dados request');
        console.log($request);

        // $event->title = $request->title;
        // $event->city = $request->city;
        // $event->private = $request->private;
        // $event->description = $request->description;

        // Image Upload
        // if($request->hasFile('image') && $request->file('image')>isValid()){

        //     $requestImage = $request->image;

        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        //     $request->image->move(public_path('img/events'), $imageName);

        //     $event->image = $imageName;
        // }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
        
    }
}
