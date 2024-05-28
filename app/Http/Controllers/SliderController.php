<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(5);
        return view('sliders/index', ['sliders' => $sliders]);
    }

    public function show($id): View
    {
        $slider = Slider::findOrFail($id);

        return view('sliders/show',['slider' => $slider]);
    }
    public function create(): View
    {
        return view('sliders/create');
    }

    public function edit($id): View
    {
        $slider = Slider::findOrFail($id);
        return view('sliders/edit', ['slider' => $slider]);
    }

    public function store(SliderFormRequest $req): RedirectResponse
    {
        $data = $req->validated();

            if ($req->hasFile('imageUrl')) {
        $data['imageUrl'] = $this->handleImageUpload($req->file('imageUrl'));
    }

        $slider = Slider::create($data);
        return redirect()->route('admin.slider.show', ['id' => $slider->id]);
    }

    public function update(Slider $slider, SliderFormRequest $req)
    {
        $data = $req->validated();

            if ($req->hasFile('imageUrl')) {
        // Suppression de l'ancienne image si elle existe
        if ($slider->imageUrl) {
            Storage::disk('public')->delete($slider->imageUrl);
        }
        $data['imageUrl'] = $this->handleImageUpload($req->file('imageUrl'));
    }

        $slider->update($data);

        return redirect()->route('admin.slider.show', ['id' => $slider->id]);
    }

    public function updateSpeed(Slider $slider, Request $req)
    {
        foreach ($req->all() as $key => $value) {
            $slider->update([
                $key => $value
            ]);
        }

        return [
            'isSuccess' => true,
            'data' => $req->all()
        ];
    }

    public function delete(Slider $slider)
    {
            if ($slider->imageUrl) {
        Storage::disk('public')->delete($slider->imageUrl);
    }
        $slider->delete();

        return [
            'isSuccess' => true
        ];
    }

        private function handleImageUpload(\Illuminate\Http\UploadedFile|array $images): string|array
    {
        if (is_array($images)) {
            $uploadedImages = [];
            foreach ($images as $image) {
                $imageName = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');
                $uploadedImages[] = 'images/' . $imageName;
            }
            return $uploadedImages;
        } else {
            $imageName = uniqid() . '_' . $images->getClientOriginalName();
            $images->storeAs('images', $imageName, 'public');
            return 'images/' . $imageName;
        }
    }
}