<?php 

class Model_Posts extends Orm\Model
{
  protected static $_properties = array(
    'id',
    'title',
    'category',
    'body',
    'created_at',
    'tags',
  );
}

?>