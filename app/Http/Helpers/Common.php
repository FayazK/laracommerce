<?php

function get_settings($key) {
    $value = FALSE;
    try {
        $value = \App\Setting::where('name', $key)->where('site', 'yes')->get(['value']);
        $value = $value[0]->value;
    } catch (Exception $e) {
        Log::error($e->getMessage());
    }
    return $value;
}

function set_settings($key, $value) {
    $r = false;
    try {

        $r = \App\Setting::where('name', $key)->update(['value' => $value]);
    } catch (Exception $e) {
        Log::error($e->getMessage());
    }
    return $r;
}
