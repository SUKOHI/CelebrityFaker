# CelebrityFaker
A Laravel package to generate fake data using celebrity data.

# Installation

Execute the next command.

    composer require sukohi/CelebrityFaker:1.*

Set the service providers in app.php

    'providers' => [
        ...Others...,
        Sukohi\CelebrityFaker\CelebrityFakerServiceProvider::class,
    ]

Also alias

    'aliases' => [
        ...Others...,
        'CelebrityFaker'   => Sukohi\CelebrityFaker\Facades\CelebrityFaker::class,
    ]

Then execute the next commands.  

    php artisan vendor:publish

# Config

After run the above command you should have a config file called `celebrity_faker.php` in your config folder.  
You can set csv file path(s) there.

# About CSV file

CSV files need to have key in first line like so.
 
| name | birthday | gender_id | ... 

# Usage

    for($i = 0; $i < 100; $i++){

        // Get celebrity randomly
        $celebrity = \CelebrityFaker::getCelebrity();
        
        // Each
        echo $celebrity->name;
        echo $celebrity->name_kana;
        echo $celebrity->gender_id;
        echo $celebrity->height;
        echo $celebrity->weight;
        echo $celebrity->blood_type;
        echo $celebrity->prefecture;
        echo $celebrity->company;
        
        // Array
        print_r($celebrity->toArray());

    }

# License

This package is licensed under the MIT License.  
Copyright 2017 Sukohi Kuhoh