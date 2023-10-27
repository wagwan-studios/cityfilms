<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:portfolio,title',
            'related_to' => 'required',
            'portfolio_category_id' => 'required|exists:portfolio_categories,id',
            'description' => 'required',
            'video_url' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:9000000'
        ];
    }
}
