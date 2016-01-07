<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 12/18/15
 * Time: 2:28 PM
 */

function HomeController() {
    $data = [
        'title' => "Myanmar Links",
        'second_title' => "Myanmar Tutorials",
        "blogs"  => [
            [
                "id"        => 1,
                "title"     => 'Blog Post 1',
                "body"      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad animi autem beatae consequatur cumque deserunt ducimus eum fugit illo laboriosam libero maxime, natus numquam provident sapiente sed tempore.'
            ],
            [
                "id"        => 2,
                "title"     => 'Blog Post 2',
                "body"      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad animi autem beatae consequatur cumque deserunt ducimus eum fugit illo laboriosam libero maxime, natus numquam provident sapiente sed tempore.'
            ],
            [
                "id"        => 3,
                "title"     => 'Blog Post 3',
                "body"      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad animi autem beatae consequatur cumque deserunt ducimus eum fugit illo laboriosam libero maxime, natus numquam provident sapiente sed tempore.'
            ],
        ]
    ];

    load_view("home", $data);
}

function BlogController($category, $id) {

    echo $category;
    echo $id;
    load_view("blog");

}

function PageController() {
    load_view("page");
}