<?php
namespace Model;

use PDO;

class BlogDB {
    public $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function create($blog) {
        $sql = "INSERT INTO `blogs` (`title`, `teaser`, `content`, `created`) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $blog->title);
        $statement->bindParam(2, $blog->teaser);
        $statement->bindParam(3, $blog->content);
        $statement->bindParam(4, $blog->created);
        return $statement->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM blogs";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $blogs=[];
        foreach ($statement->fetchAll() as $row) {
            $blog = new Blog($row['title'], $row['teaser'], $row['content'], $row['created']);
            $blog->id = $row['id'];
            $blogs[] = $blog;
        }
        return $blogs;
       
    }

    public function get($id) {
        $sql = "SELECT * FROM blogs WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        $blog = new Blog($result['title'], $result['teaser'], $result['content'], $result['created']);
        $blog->id = $result['id'];
        return $blog;
    }

    public function update($id, $blog) {
        $sql = "UPDATE `blogs` SET `title` = ?, `teaser` = ?, `content` = ?, `created` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $blog->title);
        $statement->bindParam(2, $blog->teaser);
        $statement->bindParam(3, $blog->content);
        $statement->bindParam(4, $blog->created);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM blogs WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
}
?>
