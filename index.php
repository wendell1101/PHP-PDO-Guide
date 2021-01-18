<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdoposts';

    // SET DSN
    $dsn = 'mysql:host='.$host . ';dbname='.$dbname;

    // create a PDO instance
    $conn = new PDO($dsn, $user, $password);
    // set default fetch attribute to object
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // for LIMITS

    # PDO QUERY
    //QUERY METHOD

    //$stmt = $conn->query('SELECT * FROM posts');
    //fetch assoc
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     echo $row['title'] . '<br>';
    // }
    //fetch object
    // while($row = $stmt->fetch()){
    //     echo $row->title . '<br>';
    // }

    //  PREPARED STATEMENTS(PREPARE AND EXECUTE)

    //UNSAFE
    // $sql = "SELECT * FROM posts where author='$author'";

    //Fetch Multple Posts

    //Sample User input
    $author = "wendell";
    $is_published = true;

    // Positional Parameters
    // $sql = "SELECT * FROM posts WHERE author=?";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();
    // foreach($posts as $post){
    //     echo $post->body . '<br>';
    // }

    // Named Parameters
    // $sql = "SELECT * FROM posts WHERE author=:author && is_published=:is_published";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
    // $posts = $stmt->fetchAll();
    // // print_r($posts);
    // foreach($posts as $post){
    //     echo $post->title . '<br>';
    // }


    // FETCH SINGLE POST
    // $id = 2;
    // $sql = "SELECT * FROM posts WHERE id=:id";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['id' => $id]);
    // $post = $stmt->fetch();
    // // print_r($post);
    // echo $post->id . ' - ' . $post->title;

    // GET ROW COUNT
    // $stmt = $conn->prepare("SELECT * FROM posts WHERE author=:author");
    // $stmt->execute(['author' => $author]);
    // $postCount = $stmt->rowCount(); // function to get row count
    // echo $postCount;


    // INSERT DATA
    // $title = 'Post Five';
    // $body = "This is post five";
    // $author = "Pikachu";

    // $sql = "INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
    // $post = $stmt->fetch();
    // print_r($post);

    // UPDATE DATA
    // $id = 4;
    // $title = "POST four new Title";
    // $body = "Post four new body";
    // $author = "charmander";

    // $sql = "UPDATE posts SET title=:title, body=:body, author=:author WHERE id=:id";
    // $stmt = $conn->prepare($sql);
    // $run = $stmt->execute(['id' => $id, 'title' => $title, 'body' => $body, 'author' => $author]);
    // if($run){
    //     echo 'POST UPDATED';
    // }

    // DELETE DATA
    // $id = 5;
    // $sql = "DELETE FROM posts WHERE id=:id";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['id' => $id]);

    //SEARCH DATA
    // $search = "%blog%";
    // $sql = "SELECT * FROM posts WHERE title LIKE :search";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['search' => $search]);
    // $posts = $stmt->fetchAll();

    // foreach($posts as $post){
    //     echo $post->title . '<br>';
    // }



