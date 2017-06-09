<?php namespace Sukohi\CelebrityFaker;

class CelebrityFaker {

    private $celebrities = [];
    private $current_celebrity_id = 0;

    public function __construct() {

        $csv_files = config('celebrity_faker.csv_files');
        $keys = [];
        $celebrities = [];

        foreach ($csv_files as $csv_file) {

            $file = new \SplFileObject($csv_file);
            $file->setFlags(\SplFileObject::READ_CSV);

            foreach ($file as $i => $line) {

                $celebrity = new Celebrity();

                foreach ($line as $j => $value) {

                    if($i == 0) {

                        $keys[$j] = $value;

                    } else {

                        $celebrity->setMetadata($keys[$j], $value);

                    }

                }

                if($celebrity->hasMetadata()) {

                    $celebrities[] = $celebrity;

                }

            }

        }

        $this->celebrities = $celebrities;
        shuffle($this->celebrities);

    }

    public function getCelebrity() {

        $id = $this->current_celebrity_id;

        if(!isset($this->celebrities[$id])) {

            $id = $this->current_celebrity_id = 0;

        }

        $this->current_celebrity_id++;
        return $this->celebrities[$id];

    }

}