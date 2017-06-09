<?php namespace Sukohi\CelebrityFaker;

class Celebrity {

    private $metadata = [];

    public function __get($name) {

        return $this->get($name);

    }

    public function setMetadata($key, $value) {

        if(!empty($value)) {

            $this->metadata[$key] = $value;

        }

    }

    public function get($name) {

        return array_get($this->metadata, $name);

    }

    public function hasMetadata() {

        return (count($this->metadata) > 0);

    }

    public function toArray() {

        return $this->metadata;

    }

}