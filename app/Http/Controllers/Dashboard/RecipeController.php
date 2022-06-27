<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('dashboard.recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RecipeRequest $request
     * @return Response
     */
    public function store(RecipeRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'recipes'");
        $next_id = $next_id[0]->Auto_increment;
        $imageName = Upload::uploadImage($request->file('image'), 'recipes/' . $next_id);
        DB::table('recipes')->insert([
            'title_ar'      => $request->get('title_ar'),
            'title_en'      => $request->get('title_en'),
            'image'         => $imageName,
            'link'          => $request->get('link'),
            'display'       => $request->get('display'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('message', __('messages.recipeAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('dashboard.recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RecipeRequest $request
     * @param int $id
     * @return Response
     */
    public function update(RecipeRequest $request, $id)
    {
        $recipe             = Recipe::findOrFail($id);
        $recipe->title_ar   = $request->get('title_ar');
        $recipe->title_en   = $request->get('title_en');
        $recipe->link       = $request->get('link');
        $recipe->display    = $request->get('display');
        if ($request->file('image')) {
            $recipe->image = Upload::uploadImage($request->file('image'),
                'recipes/' . $recipe->id, $recipe['image']);
        }
        $recipe->save();
        return redirect()->back()->with('message', __('messages.recipeUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        Upload::deleteDirectory('recipes/' . $recipe->id);
        $recipe->delete();
        return redirect()->back()->with('message', __('messages.recipeDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $recipe = Recipe::findOrFail(request('id'));
        $recipe->display = request('display');
        $recipe->save();
    }
}
