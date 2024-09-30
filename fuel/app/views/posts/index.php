<?php foreach ($posts as $post): ?>
  <div class="item mb-5">
    <div class="row g-3 g-xl-0">
      <div class="col-2 col-xl-3">
          <img class="img-fluid post-thumb " src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">
      </div>
      <div class="col">
        <h3 class="title mb-1"><a class="text-link" href="/posts/view/<?= $post->id; ?>"><?= $post->title ?></a></h3>
        <div class="meta mb-1"><span class="date"><?=$post->created_at ?></span></div>
        <div class="intro"><?= $post->body ?></div>
        <a class="text-link" href="/posts/view/<?= $post->id; ?>">Read more &rarr;</a>
      </div><!--//col-->
    </div><!--//row-->
  </div><!--//item-->
<?php endforeach;?>

