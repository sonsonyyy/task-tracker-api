<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'card_id' => ['required', 'exists:App\Models\Card,id'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['nullable'],
            'start_date' => ['nullable', 'date_format:Y-m-d', 'after_or_equal:today', 'before_or_equal:due_at'],
            'due_at' => ['nullable', 'date', 'after_or_equal:today'],
        ];
    }
}
