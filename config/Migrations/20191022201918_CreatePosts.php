<?php
use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $posts = $this->table('posts');
        $posts->addColumn('titulo', 'string')
              ->addColumn('texto', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addColumn('archivo','string')
              ->save();
    }
}
