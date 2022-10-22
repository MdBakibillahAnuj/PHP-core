<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view('admin.user',compact('data'));
    }

    public function delete($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodMenu()
    {
        return view('admin.menu.food_menu');
    }
    public function foodUpload(Request $request)
    {
        $data = new food;

        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('food_image', $imageName);

        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function allFood()
    {
        return view('admin.menu.food',[
            'data' => food::all(),
        ]);
    }
    public function deleteFood($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateFood($id)
    {
        return view('admin.menu.update_food',[
            'data' => food::findOrFail($id),
        ]);
    }
    public function editFood(Request $request,$id)
    {
        $data=food::find($id);

        $image = $request->image;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('food_image', $imageName);

        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

}
