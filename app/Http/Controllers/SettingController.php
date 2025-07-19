<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Settings\CreateSettingAction;
use App\Actions\Settings\DeleteSettingAction;
use App\Actions\Settings\ListSettingsAction;
use App\Actions\Settings\UpdateSettingAction;
use App\Http\Requests\Settings\CreateSettingRequest;
use App\Http\Requests\Settings\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

final class SettingController extends Controller
{
    /**
     * Display a listing of the settings.
     */
    public function index(ListSettingsAction $action): View
    {
        $settings = $action->handle();

        return view('settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new setting.
     */
    public function create(): View
    {
        return view('settings.create');
    }

    /**
     * Store a newly created setting in storage.
     */
    public function store(CreateSettingRequest $request, CreateSettingAction $action): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $setting = $action->handle($request->validated());

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Setting created successfully.',
                'setting' => $setting
            ]);
        }

        return redirect()->route('settings.index')
            ->with('success', 'Setting created successfully.');
    }

    /**
     * Display the specified setting.
     */
    public function show(Setting $setting): View
    {
        return view('settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified setting.
     */
    public function edit(Setting $setting): View
    {
        return view('settings.edit', compact('setting'));
    }

    /**
     * Update the specified setting in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting, UpdateSettingAction $action): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $updatedSetting = $action->handle($setting, $request->validated());

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Setting updated successfully.',
                'setting' => $updatedSetting
            ]);
        }

        return redirect()->route('settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    /**
     * Remove the specified setting from storage.
     */
    public function destroy(Setting $setting, DeleteSettingAction $action): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $result = $action->handle($setting);

        if (request()->expectsJson()) {
            return response()->json([
                'success' => $result,
                'message' => 'Setting deleted successfully.',
                'id' => $setting->id
            ]);
        }

        return redirect()->route('settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
}
