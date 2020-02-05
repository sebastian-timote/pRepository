<?php
namespace repositorio;

use repositorio\productRepositoryInterfase;

class productRepository implements productRepositoryInterfase
{

   public function search($name)
   {
      echo $name;
   }

   public function getAllByUser($user_id)
   {
      
   }

   public function getAllByCategory($category_id)
   {
      
   }
}