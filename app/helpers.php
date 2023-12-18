<?php


    function titre(?string $title = null): string {
        return $title ? $title . ' | ' . config('app.name') : config('app.name');
    }
