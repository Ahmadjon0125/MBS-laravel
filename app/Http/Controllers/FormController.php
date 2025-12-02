<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // A. Kiruvchi ma'lumotlarni tekshirish (Validation)
        $validatedData = $request->validate([
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:forms'], // Agar noyoblik kerak bo'lsa
            'comment' => ['nullable', 'string'],
        ]);
        
        // B. Ma'lumotni bazaga saqlash
        Form::create($validatedData); 
        // Eslatma: ContactForm modeli `protected $fillable = ['phone', 'email', 'comment'];`
        // qismiga ega bo'lishi kerak, siz bergan koddagi kabi.

        // C. Foydalanuvchini qayta yo'naltirish
        return redirect()->back()->with('success', 'So\'rovingiz muvaffaqiyatli yuborildi!');
        // yoki boshqa sahifaga: 
            // return redirect()->route('productIn.page');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
