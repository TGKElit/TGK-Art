<?php

declare(strict_types = 1);

function filterArray($filterOptions, $images) {
    if (!empty($filterOptions)) {
        $images = filterCriterion($filterOptions, 'medium', $images);
        $images = filterCriterion($filterOptions, 'subject', $images);
    }
    return $images;
}

function filterCriterion($filterOptions, $type, $images) {
    if (isset($filterOptions[$type])){
        foreach($filterOptions[$type] as $optionKey => $filterOption) {
            if(isset($filterOption)) {
                foreach($images as $key => $image) {
                    if ($image[$type] === $optionKey) {
                        $newImages[] = $images[$key];
                    }
                }
            }
        }
    } else {
        $newImages = $images;
    }
    return $newImages;
}

function isChecked($filterOption) {
    if (isset($filterOption)) {
        return 'checked';
    }
}
