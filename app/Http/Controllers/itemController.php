<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('additems', ['items'=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = item::create([
            'Nom'=>$request->nom,
            'Description'=>$request->description,
            'Type'=>$request->Type,
            'user_id'=>auth()->user()->id,
            'categorie_id'=>$request->categorie_id
        ]);

        $items = Item::all();
        
        return view('arrayitems',['items'=>$items]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $item = Item::find($id);
        return view('edititems')->with('item',$item);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $item = Item::findOrFail($request->id);
        $item->update([
            'Nom'=> $request->nom,
            'Description'=>$request->description,
            'Type'=>$request->Type,
            'categorie_id'=>$request->categorie_id
        ]);
       return view('edititems',['item'=>$item]);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id)->delete();
        
        $items = Item::all();
        return view('arrayitems',['items'=>$items]);
    }
    public function search(request $request){
        
        $search = $request['search']?? "" ;
        if ($search != "") {
            $items = Item::where('Nom','=',"%".$search."%")->get();
        }else {
            
        }
        
        $item = compact('items');
        return view('search',['items'=>$items]);
        
        
        
        // $search = request()->query('search');
        // if ($search) {
        //     $items = Item::where('Nom','Like'," %.$search.% ");
        // }else {
        //     $items = Item::simplePaginate(2);
        // }
        // return view('search',['items'=>$items]);
        
        // $search = (new Item)->newQuery();
        //  if($request->has('Nom')){
        //     $request->where('Nom',$request->input('Nom'));
        //  }
        //  if($request->has('Description')){
        //     $request->where('Description',$request->input('Nom'));
        //  }
        //  if($request->has('Type')){
        //     $request->where('Type',$request->input('Type'));
        //  }
        //  if($request->has('categorie')){
        //     $request->where('categorie',$request->input('categorie_id'));
        //  }
        //  $research = Item::where('Nom','Like'," %$search% ")->orWhere('Type','Like',"%$search%")->get();
        //  return $search->get(); 
        // $search = Item::get('Nom');
        // $search = Item::where('Nom','like','%'.$search.'%');
        
        
        // $search = Input::get('search');
        // $items = Item::where('title','like','%'.$search.'%');
        // return view('search',['items' => $items]);
    
    }
}