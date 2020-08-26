<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::paginate(10);
        return view('forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Form;
        return view('forms.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['image'] = $this->upload($request);
        $input['user_id'] = Auth::id();
        $form = Form::create($input);
        return redirect()->route('forms.show', $form->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        return view('forms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $input = $request->all();
        $input['image'] = $this->upload($request, $form);
        $form->update($input);
        return redirect()->route('forms.show', $form->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();
    }

    /**
     * Upload file
     */
    protected function upload(Request $request, Form $form = null)
    {
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->image->store('images', 'public');
            // Remove old image
            if ($form->image ?? false) {
                Storage::disk('public')->delete($form->image);
            }
        }
        return $path;
    }

}
