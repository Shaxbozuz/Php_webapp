
<?php 
$title = 'Post'; 
require './includes/header.php';

require './databse.php';

// $id = $_GET['id'];

$id = $_GET['id'] ?? null;

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

// var_dump($post);
?>

<div class="container mt-5" >
<main>
    <h3><?= $post['id']?> </h5>
    <h1><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

    <p><?= $post['created_at']; ?></p>
    <hr class="col-3 col-md-2 mb-5">

    
    </div>
  </main>
</div>


<?php require 'includes/footer.php'; ?>