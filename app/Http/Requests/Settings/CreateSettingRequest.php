<?php

declare(strict_types=1);

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

final class CreateSettingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'site_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'github' => ['required', 'string', 'max:255'],
            'twitter' => ['required', 'string', 'max:255'],
            'instagram' => ['required', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'max:255'],
            'linkedin' => ['required', 'string', 'max:255'],
            'youtube' => ['required', 'string', 'max:255'],
            'tiktok' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'status' => ['required', 'string', 'in:active,inactive'],
            'location' => ['required', 'string', 'max:255'],
        ];
    }
}
