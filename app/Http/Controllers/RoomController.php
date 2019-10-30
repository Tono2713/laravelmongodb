<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function create()
    {
        return view('room.create');
    }

    public function store(Request $request)
    {
        $room = new Room();
        $room->numero = $request->get('number');   
        $room->save();
        return redirect('/room/')->with('success', 'room has been successfully added');
    }
  
    public function index()
    {
        //$client = json_api()->client('http://external.com/webhooks');
        $rooms=Room::all();
       /* $client = new Room::request([
            'base_uri' => 'https://api.coindesk.com/v1/bpi/currentprice.json',
        ]);
        $response = $client->request('GET', '');
        $posts  = json_decode($response->getBody()->getContents());*/

        //$rooms = Room::get()->json()->all();
        return view('room.index',compact('rooms'));
    }

    public function edit($id)
    {
        $room = Room::find($id);
        return view('room.edit',compact('room','id'));
    }

    public function update(Request $request, $id)
    {
        $room= Room::find($id);
        $room->numero = $request->get('number');     
        $room->save();
        return redirect('/room/')->with('success', 'Room has been successfully update');
    }

    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('/room/')->with('success','Room has been  deleted');
    }
}
