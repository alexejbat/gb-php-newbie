<?php

function getGallery()
{
    return array_splice(scandir('../public/gallery_img/small/'), 2);
}