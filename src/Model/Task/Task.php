<?
class Task
{
	private $title;
	private $text;
	private $author;
	private static $id = 0;

	public function __constructor(string $title, string $text, User $author)
	{
		$this->title = $title;
		$this->text = $text;
		$this->author = $author;
		self::$id++;
	}

	public static function getId()
    {
        return self::$id;
    }

	public function getTitle(): string
	{
		return $this->title;
	}

	 public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}

?>