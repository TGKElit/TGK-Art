<?php

function filterArray($filterOptions, $images) {
    print_r($filterOptions);
    $newImages = [];

    if($filterOptions['oil'] === "on") {
        foreach($images as $image) {
            if ($image['medium'] === 'oil') {
                $newImages[] = $image;
            }
        }
    }
    if($filterOptions['pencil'] === "on") {
        foreach($images as $image) {
            if ($image['medium'] === 'pencil') {
                $newImages[] = $image;
            }
        }
    }
    if($filterOptions['digital'] === "on") {
        foreach($images as $image) {
            if ($image['medium'] === 'digital') {
                $newImages[] = $image;
            }
        }
    }

    if($filterOptions['landscape'] === "on") {
        foreach($images as $image) {
            if ($image['subject'] === 'landscape') {
                $newImages[] = $image;
            }
        }
    }
    
    if($filterOptions['portrait'] === "on") {
        foreach($images as $image) {
            if ($image['subject'] === 'portrait') {
                $newImages[] = $image;
            }
        }
    }

    if($filterOptions['figure'] === "on") {
        foreach($images as $image) {
            if ($image['subject'] === 'figure') {
                $newImages[] = $image;
            }
        }
    }

    return $newImages;
}