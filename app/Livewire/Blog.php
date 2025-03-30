<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Blog extends Component
{
    public $posts = [];

    public function mount()
    {
        $this->posts = Cache::remember('hashnode_blogs', now()->addMinutes(30), function () {
            $query = <<<GQL
        {
            user(username: "ansumannn") {
                publications(first: 1) {
                    edges {
                        node {
                            posts(first: 10) {
                                edges {
                                    node {
                                        title
                                        brief
                                        coverImage { url }
                                        slug
                                        publishedAt
                                        views
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        GQL;

            $response = Http::post('https://gql.hashnode.com/', ['query' => $query]);

            $data = $response->json();

            return isset($data['data']['user']['publications']['edges'][0]['node']['posts']['edges'])
                ? collect($data['data']['user']['publications']['edges'][0]['node']['posts']['edges'])
                    ->map(fn($post) => $post['node'])
                    ->toArray()
                : [];
        });
    }


    public function render()
    {
        return view('livewire.portfolio.blog', [
            'posts' => $this->posts,
        ])->layout('components.layouts.frontend.main');
    }
}
