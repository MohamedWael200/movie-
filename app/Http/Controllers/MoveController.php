<?php

namespace App\Http\Controllers;

use App\Models\Move;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoveController extends Controller
{
    use UploadImageTrait;
    //
    public function showadd(){
        return view('add');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'photos' => 'required', // Max file size of 1MB
            'moveName' => 'required', // Max file size of 1MB
            'backimage' => 'required', // Max file size of 1MB
            'rating' => 'required', // Max file size of 1MB
        ]);
        $pathmain = $this->uploadImage($validatedData['photos'],'main');
        $pathback = $this->uploadImage($validatedData['backimage'],'back');
        Move::create([
            'moveName'=>$validatedData['moveName'],
            'summary'=>$request->summary,
            'category'=>$request->category,
            'rating'=>$validatedData['rating'],
            'ReleaseDate'=>$request->ReleaseDate,
            'country'=>$request->country,
            'quality'=>$request->quality,
            'pathPhoto'=>$pathmain,
            'pathBackground'=>$pathback,
        ]);
        return redirect()->route('home');
    }

    public function home(){
        $limitmoves = Move::where('rating','<',9)->limit(8)->get();
        $bestmoves = Move::where('rating','>',8)->get();
        return view('index',['limitMoves'=>$limitmoves , 'bestMoves'=>$bestmoves]);
    }

    public function showmovies(){
        $moves = Move::all();
        $category = Move::select('category')->distinct()->get();
        return view('movies',['allMoves'=>$moves ,'category'=>$category]);
    }

    public function about(){
        return view('about');
    }


    public function moveDetails($id){
        $moveDetails= Move::findorfail($id);
        return view('move-details',['details'=>$moveDetails]);
    }


    public function edite($id){
        $move = Move::where('id' ,$id)->first();
        return view('update',compact('move'));
    }

    public function update(Request $request ,$id){
        $move = Move::findorfail($id);
        $move->update(
            $request->all()
        );
        return redirect()->route('dashboard');
    }


    public function destroy($id){
        Move::destroy($id);
        return redirect()->route('dashboard');
    }

    public function deleteAll(){
        DB::table('moves')->delete();
    }
}
