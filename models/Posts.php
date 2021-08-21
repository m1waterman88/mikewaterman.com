<?php

/**
 * This is a stand-in dummy class to help develop the front end
 * before the database is in place.
 */
class Posts {
    private string $author;
    private int $id;
    private string $published_date;
    private string $text;
    private string $title;

    public function __construct() {
        static $id_count = 0;

        $this->id = ++$id_count;
        $this->title = 'A post';

        $date = new DateTime();
        $this->published_date = $date->format('F d, Y \a\t h:ia T');

        $this->author = 'Mike Waterman';
        $this->text = 'Check out how text this post is!';
    }

    public function selectAll() {
        return get_object_vars($this);
    }
}
