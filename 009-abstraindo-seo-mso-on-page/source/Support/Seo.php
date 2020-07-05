<?php


namespace Source\Support;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optmizer;
    public function __construct(string $schema="article")
    {
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(
            SITE,
            "pt_BR",
            $schema
        )->publisher(
            "Dellano-Sites-107520111028267",
            "caio.nunes.7374"
        )->facebook(
            "630329850919662"
        );
    }

    public function render( string $title, string $description, string $url, string $image, bool $follow = true):string
    {
        $seo = $this->optmizer->optimize(
            $title,
            $description,
            $url,
            $image,
            $follow
        );
        return $seo->render();
    }
}