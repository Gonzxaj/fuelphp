<h1>ADD POST</h1>

<?= Form::open('/posts/add'); ?>

<div class="form-group">
  
  <?= Form::label("Title","title")?>
  <?= Form::input('title',Input::post('title',isset($post)?$post->title:''),array('class'=>'form-control')); ?>

</div>


<div class="form-group">
  
  <?= Form::label("Tags","tags")?>
  <?= Form::input('tags',Input::post('tags',isset($post)?$post->tags:''),array('class'=>'form-control')); ?>

</div>

<div class="form-group">
  
  <?= Form::label("Category","category")?>
  <?= Form::select('category','0',array(
    '0' => 'Select Category',
    '1' => 'Category 1',
    '2' => 'Category 2',
    '3' => 'Category 3',
  ), array('class'=>'form-control')) ?>

</div>

<div class="form-group">
  
  <?= Form::label("Body","body")?>
  <?= Form::textarea('body',Input::post('body',isset($post)?$post->body:''),array('class'=>'form-control')); ?>

</div>

<div class="form-group">
  
  <?= Form::submit("send")?>

</div>


<?= Form::close('/posts/add'); ?>
