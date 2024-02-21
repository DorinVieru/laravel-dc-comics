<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:150|min:5',
            'description' => 'required|min:2',
            'price' => 'required|max:20|min:2',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:30|min:2',
            'artists' => 'required|min:5',
            'writers' => 'required|min:5',
        ];
    }

    // FUNZIONE CHE RESTITUISCE I MESSAGGI PERSONALIZZATI PER GLI ERRORI
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo deve contere al massimo 150 caratteri.',
            'title.min' => 'Il titolo deve contere almeno 5 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve contenere almeno 2 caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.max' => 'Il prezzo deve contere al massimo 20 caratteri.',
            'price.min' => 'Il prezzo deve contere almeno 2 caratteri.',
            'series.required' => 'Il nome della serie è obbligatorio.',
            'series.max' => 'Il nome della serie deve contere al massimo 50 caratteri.',
            'sale_data.required' => 'La data di vendita è obbligatoria.',
            'type.required' => 'Il tipo di comic è obbligatorio.',
            'type.max' => 'Il tipo di comic deve contere al massimo 30 caratteri.',
            'type.min' => 'Il tipo di comic deve contere almeno 2 caratteri.',
            'artists.required' => "Il nome dell'artista/i è obbligatorio.",
            'artists.min' => "Il nome dell'artista/i deve contere almeno 2 caratteri.",
            'writers.required' => "Il nome dello scrittore/i è obbligatorio.",
            'writers.min' => "Il nome dello scrittore/i deve contere almeno 2 caratteri.",
        ];
    }
}
