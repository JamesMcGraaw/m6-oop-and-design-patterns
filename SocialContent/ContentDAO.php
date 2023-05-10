<?php
require_once 'pdo-connection.php';
require_once 'Post.php';
class ContentDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('social-content');
    }

    public function fetchAll(): array
    {
        $sql = 'SELECT `name`, `post`, `upvotes`, `created`'
            . 'FROM `posts`';


        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $posts = [];
        foreach ($rows as $post) {
            $posts[] = new Post($post['name'], $post['post'], $post['upvotes'], $post['created']);
        }
        return $posts;
    }

}
