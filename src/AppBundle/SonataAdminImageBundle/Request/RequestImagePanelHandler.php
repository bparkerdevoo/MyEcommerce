<?php

namespace AppBundle\SonataAdminImageBundle\Request;

use AppBundle\SonataAdminImageBundle\Request\RequestHandlerInterface;
use AppBundle\SonataAdminImageBundle\Request\RequestResult;

class RequestImagePanelHandler implements RequestHandlerInterface
{
    public function imageUpload($imageData, $contentType){

        //Do something with the image data

        $requestResult = new RequestResult();
    $requestResult->setPreviewUrl($url);
    $requestResult->setId($id);
    return $requestResult;
  }

    public function imageUrlUpload($imageUrl){

        //Do something with the url

        $requestResult = new RequestResult();
    $requestResult->setPreviewUrl($url);
    $requestResult->setId($id);
    return $requestResult;
  }

    public function deleteImage($id){
        //Delete the image
    }

    public function listImages(){

        //Generate an array of RequestResult objects

        return $results;
    }
}