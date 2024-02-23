<?php

namespace Ducan\Mvcoop\Controllers\Client;

use Ducan\Mvcoop\Commons\Controller;
use Ducan\Mvcoop\Models\Post;


class HomeController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post;
    }
    public function index()
    {
        $postFirstLatest = $this->post->getFirstLatest();
        $postTop6 = $this->post->getTop6();
        $postTop6Chunk = array_chunk($postTop6, 3);

        return $this->renderViewClient(
            'home',
            [
                'postFirstLatest' =>  $postFirstLatest,
                'postTop6Chunk' => $postTop6Chunk
            ]
        );
    }
}
