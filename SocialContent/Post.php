<?php

class Post
{
    private string $name;

    private string $post;

    private int $upvotes;

    private string $created;

    public function __construct(string $name, string $post, int $upvotes, string $created)
    {
        $this->name = $name;
        $this->post = $post;
        $this->upvotes = $upvotes;
        $this->created = $created;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPost(): string
    {
        return $this->post;
    }

    /**
     * @return int
     */
    public function getUpvotes(): int
    {
        return $this->upvotes;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }


}