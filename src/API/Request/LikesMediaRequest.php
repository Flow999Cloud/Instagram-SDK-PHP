<?php

namespace Instagram\API\Request;

use Instagram\API\Response\LikesMediaResponse;
use Instagram\Instagram;

class LikesMediaRequest extends AuthenticatedBaseRequest {

    protected $mediaId;

    /**
     * @param $instagram Instagram
     * @param $mediaId string Media Id
     */
    public function __construct($instagram, $mediaId){

        parent::__construct($instagram);

        $this->mediaId = $mediaId;
    }

    public function getMethod(){
        return self::GET;
    }

    public function getEndpoint(){
        return sprintf("/v1/media/%s/likers/", $this->mediaId);
    }

    public function getResponseObject(){
        return new LikesMediaResponse();
    }

    /**
     * @return LikesMediaResponse
     */
    public function execute(){
        return parent::execute();
    }

}