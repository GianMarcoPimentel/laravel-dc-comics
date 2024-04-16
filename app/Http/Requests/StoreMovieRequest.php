<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * funzione per memorizzare le regole nella $request
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|max:255',
            'description'=> 'nullable|max:1500',
            'thum'=>'nullable|max:1500',
            'price'=>'required|max:6',
            'series'=>'required|max:255',
            'sale_date'=>'required|max:10',
            'type'=>'required|max:100',
            'artists'=>'required|max:2000',
            'writers'=>'required|max:2000',
        ];
    }

    //introduco una funzione per stampare i messaggi 
    // la battitura ": array " è opzionale
    public function messages(): array
    {
        return [    
            'title.required'=> 'Devi inserire il titolo',
            'title.max'=> 'Il titolo deve contenere massimo :max caratteri',
            'description.max'=> 'La descrizione deve contenere massimo :max caratteri',
            'thum.max'=> "l'url deve contenere massimo :max caratteri",
            'price.required'=> 'Devi inserire il prezzo',
            'price.max'=> 'Il prezzo deve contenere massimo :max caratteri',
            'series.required'=> 'Devi inserire la serie',
            'series.max'=> 'La serie deve contenere massimo :max caratteri',
            'sale_date.required'=> 'Devi inserire la data di uscita in formato gg/mm/aaaa',
            'sale_date.max'=> 'La data di uscita deve contenere massimo :max caratteri',
            'type.required'=> 'Devi inserire la tipologia',
            'type.max'=> 'La tipologia deve contenere massimo :max caratteri',
            'artists.required'=> "Devi inserire l'artista o gli artisti",
            'artists.max'=> 'Il campo per gli artisti deve contenere massimo :max caratteri',
            'writers.required'=> "Devi inserire lo scrittore o gli scrittori",
            'writers.max'=> 'Il campo per gli scrittori deve contenere massimo :max caratteri',
        ];
    }
}
