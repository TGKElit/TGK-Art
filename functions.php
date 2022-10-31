<?php

declare(strict_types = 1);

function filterArray($filterOptions, $images) {
    if(isset($filterOptions['oil']) || isset($filterOptions['pencil']) || isset($filterOptions['digital'])){
        if(!isset($filterOptions['oil'])) {
            foreach($images as $key => $image) {
                if ($image['medium'] === 'oil') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }

        if(!isset($filterOptions['pencil'])) {
            foreach($images as $key => $image) {
                if ($image['medium'] === 'pencil') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }
        
        if(!isset($filterOptions['digital'])) {
            foreach($images as $key => $image) {
                if ($image['medium'] === 'digital') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }
    }
    if(isset($filterOptions['landscape']) || isset($filterOptions['portrait']) || isset($filterOptions['figure'])){
        if(!isset($filterOptions['landscape'])) {
            foreach($images as $key => $image) {
                if ($image['subject'] === 'landscape') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }

        if(!isset($filterOptions['portrait'])) {
            foreach($images as $key => $image) {
                if ($image['subject'] === 'portrait') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }

        if(!isset($filterOptions['figure'])) {
            foreach($images as $key => $image) {
                if ($image['subject'] === 'figure') {
                    unset($images[$key]);
                }
            }
            $images = array_values($images);
        }
    }
    return $images;
}

function isChecked($filterOption) {
    if (isset($filterOption)) {
        return 'checked';
    }
}