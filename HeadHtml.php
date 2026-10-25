<?php

// Copyright (c) Tribufu. All Rights Reserved.
// SPDX-License-Identifier: MIT

namespace Paymenter\Extensions\Others\HeadHtml;

use App\Attributes\ExtensionMeta;
use App\Classes\Extension\Extension;
use Illuminate\Support\Facades\Event;

#[ExtensionMeta(
    name: 'Head HTML',
    description: 'Adds HTML to the head of the pages of the store, such as the script of an analytics service.',
    version: '1.0.0',
    author: 'Tribufu',
    url: 'https://github.com/tribufu/paymenter-head',
)]
class HeadHtml extends Extension
{
    public function getConfig($values = [])
    {
        return [
            [
                'name' => 'html',
                'label' => 'HTML',
                'type' => 'textarea',
                'required' => true,
                'description' => 'Added as it is to the end of the head of every page of the store, not of the admin area.',
            ],
        ];
    }

    public function boot()
    {
        Event::listen('head', fn () => ['view' => (string) $this->config('html')]);
    }
}
